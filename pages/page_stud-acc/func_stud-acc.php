<?php
    include "../../DataBase.php";

    $cmp_acc = [];

    function init() {
        global $cmp_acc;
        
        $db_connect = connect();

        $query_db_users_company = mysqli_query($db_connect, "SELECT * FROM `userstudent`");

        while (($cmp_acc_prev = mysqli_fetch_assoc($query_db_users_company))) {
            array_push($cmp_acc, $cmp_acc_prev);
        }        
    }

    function parser_contacts($text) {
        $res = ['tg' => '', 'vk' => '', 'git' => ''];

        $l = strlen($text);
        $tag = '';
        $i = 0;
        $c = 0;
        while ($i < $l) {
            if ($text[$i] != ';') {
                $tag = $tag . $text[$i];
            }
            else {
                $tag = ltrim($tag);
                if ($c == 0) {
                    $res['tg'] = $tag;
                }
                else if ($c == 1) {
                    $res['vk'] = $tag;
                }
                else if ($c == 2) {
                    $res['git'] = $tag;
                }

                $c++;
                $tag = '';
            }
            $i++;
        }

        return $res;
        
    }

    function get_id_from_name($name) {
        global $cmp_acc;
        
        for ($i = 0; $i < count($cmp_acc); $i++) {
            if ($cmp_acc[$i]['UserName'] == $name) {
                return $cmp_acc[$i]['id'];
            }
        }

        return false;
    }

    function get_ava_url($id) {
        global $cmp_acc;

        $id = get_id_from_name($id);

        for ($i = 0; $i < count($cmp_acc); $i++) {
            if ($cmp_acc[$i]['id'] == $id) {
                return $cmp_acc[$i]['Img'];
            }
        }

        return false;
    }

    function get_title($id) {
        global $cmp_acc;

        $id = get_id_from_name($id);

        for ($i = 0; $i < count($cmp_acc); $i++) {
            if ($cmp_acc[$i]['id'] == $id) {
                return $cmp_acc[$i]['SureName'];
            }
        }

        return false;
    }

    function get_dash($id) {
        global $cmp_acc;

        $id = get_id_from_name($id);

        for ($i = 0; $i < count($cmp_acc); $i++) {
            if ($cmp_acc[$i]['id'] == $id) {
                return $cmp_acc[$i]['Dash'];
            }
        }

        return false;
    }

    function get_link_tg($id) {
        global $cmp_acc;

        $id = get_id_from_name($id);

        $contacts = [];

        for ($i = 0; $i < count($cmp_acc); $i++) {
            if ($cmp_acc[$i]['id'] == $id) {
                $contacts_text = $cmp_acc[$i]['Contacts'];
                $contacts = parser_contacts($contacts_text);

                return $contacts['tg'];
            }
        }

        return false;
    }

    function get_link_vk($id) {
        global $cmp_acc;

        $id = get_id_from_name($id);

        $contacts = [];

        for ($i = 0; $i < count($cmp_acc); $i++) {
            if ($cmp_acc[$i]['id'] == $id) {
                $contacts_text = $cmp_acc[$i]['Contacts'];
                $contacts = parser_contacts($contacts_text);

                return $contacts['vk'];
            }
        }

        return false;
    }
    
    function get_link_git($id) {
        global $cmp_acc;

        $id = get_id_from_name($id);

        $contacts = [];

        for ($i = 0; $i < count($cmp_acc); $i++) {
            if ($cmp_acc[$i]['id'] == $id) {
                $contacts_text = $cmp_acc[$i]['Contacts'];
                $contacts = parser_contacts($contacts_text);

                return $contacts['git'];
            }
        }

        return false;
    }

?>