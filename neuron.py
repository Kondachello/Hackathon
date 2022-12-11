import tensorflow as td
from tensorflow import keras
import numpy as np
import mysql.connector

mydb = mysql.connector.connect(
	host="127.0.0.1",
	user="root",
	password="neAuti228cg_huyble",
	database="Hackathon 5",
	port="3306"
)
mycursor = mydb.cursor()

data = keras.datasets.imdb

word_index = data.get_word_index()

word_index = {k:(v+3) for k, v in word_index.items()}
word_index["<PAD>"] = 0
word_index["<START>"] = 1
word_index["<UNK>"] = 2
word_index["<UNUSED>"] = 3

reverse_word_index = dict([(value, key) for (key, value) in word_index.items()])

def decode_review(text):
	return " ".join([reverse_word_index.get(i, "?") for i in text])
model = keras.models.load_model("model.h5")

def review_encode(s):
	encoded = [1]

	for word in s:
		if word.lower() in word_index:
			encoded.append(word_index[word.lower()])
		else:
			encoded.append(2)

	return encoded
def estim_stud(username):
	sql = f"SELECT Reviews FROM userstudent WHERE UserName ='{username}'"
	mycursor.execute(sql)
	myresult = mycursor.fetchall()
	f = open('text.txt', 'w')
	f.write(str(myresult))
	f.close()
	f = open('text.txt', 'r')
	for line in f.readlines():
		nline = line.replace(",", "").replace(".", "").replace("(", "").replace(")", "").replace(":", "").replace("\"","").strip().split(" ")
		encode = review_encode(nline)
		encode = keras.preprocessing.sequence.pad_sequences([encode], value=word_index["<PAD>"], padding="post", maxlen=50) # make the data 250 words long
		predict = model.predict(encode)
		sql = "INSERT INTO userstudent (NeironRevie) VALUES (%s)"
		val = str(predict[0])
		mycursor.execute(sql, val)
		mydb.commit()
		print('hello')
	f.close()
