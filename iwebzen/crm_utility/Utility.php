<?php

class Utility {

    public function save_lead($data = array() , $email_data = array())
    {
        // Set URL
        $url = UTILITY_LEAD_SAVE_URL;
        //var_dump($email_data);exit;
        // Compile data
        //$params = http_build_query($data);
        $params = array(
            'lead_info'=>$data,
            'lead_mail_info'=>$email_data,
            //$data
        );
        // Init CURL
        $ch = curl_init();
        //curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
        curl_setopt($ch, CURLOPT_URL, $url); //Url together with parameters
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
        curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // Send
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
        }
        curl_close($ch);

        /*if (isset($error_msg)) {
            var_dump($error_msg);
        }*/

        return $result;
    }

    public function save_lead_brief($id = 0 , $data = array())
    {
        // Set URL
        $url = UTILITY_LEAD_BRIEF_SAVE_URL;
        //var_dump($email_data);exit;
        // Compile data
        //$params = http_build_query($data);
        $params = array(
            'lead_id'=>$id,
            'lead_brief_data'=>$data,
            //$data
        );
        // Init CURL
        $ch = curl_init();
        //curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
        curl_setopt($ch, CURLOPT_URL, $url); //Url together with parameters
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
        curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // Send
        $result = curl_exec($ch);
        //var_dump($result);exit();
        /*if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
        }*/
        curl_close($ch);

        /*if (isset($error_msg)) {
            var_dump($error_msg);
        }*/

        return $result;
    }

    // METHOD FOR LANDING PAGE
    public function save_lead_init($data = array() , $email_data = array(), $package = array())
    {
        // Set URL
        $url = UTILITY_LEAD_SAVE_URL;
        //var_dump($email_data);exit;
        // Compile data
        //$params = http_build_query($data);
        $params = array(
            'lead_info'=>$data,
            'lead_mail_info'=>$email_data,
            //$data
        );
        // Init CURL
        $ch = curl_init();
        //curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
        curl_setopt($ch, CURLOPT_URL, $url); //Url together with parameters
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
        curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // Send
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
        }
        curl_close($ch);

        /*if (isset($error_msg)) {
            var_dump($error_msg);
        }*/
        $result2 = "";

        // Generate link and get Brief Form ID
        //return $result;
        // LEAD ID
        if(!empty($result)){
            // Set URL
            $url2 = UTILITY_GEN_PAYMENT_LINK;
            //var_dump($email_data);exit;
            // Compile data
            //$params = http_build_query($data);
            $params = array(
                'amount'=>$data['Amount'],
                'lead_id'=>$result,
                'package' => $package,
                'lead_type'=>$data['Lead_Type']
                //$data
            );

            // Init CURL
            $ch = curl_init();
            //curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
            curl_setopt($ch, CURLOPT_URL, $url2); //Url together with parameters
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
            curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
            curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($params));
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            // Send
            $result2 = curl_exec($ch);
            if (curl_errno($ch)) {
                $error_msg = curl_error($ch);
            }
            curl_close($ch);

            /*if (isset($error_msg)) {
                var_dump($error_msg);
            }*/

            //return $result2;
        }

        return $result2;
    }

}
