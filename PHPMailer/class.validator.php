<?php

/**
 * Description of class Validator
 *
 * @author Антон
 */
class Validator {

    public function checkSubject($subject) {
        if (!empty($subject)) {
            $subject = trim($subject);
            if (strlen($subject) > 9) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function checkMessage($message) {
        if (!empty($message)) {
            $message = trim($message);
            if (strlen($message) > 14) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    public function checkPhone($phone){
        $pattern='/^((\+38)[\- ]?)0(\(?\d{2}\)?[\- ]?)?[\d\- ]{7}$/';
        if(preg_match($pattern, $phone)){
            return true;
        }else{
            return false;
        }
    }
    
    public function checkEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }
        

}
