<?php 
    class Book {
        public $email;
        public $destination;
        public $checkIn;
        public $checkOut;
        public $quantity;
        public $promoCode;

        public function __construct($email, $destination, $checkIn, $checkOut, $quantity, $promoCode)
        {
            $this->$email = $email;
            $this->$destination = $destination;
            $this->$checkIn = $checkIn;
            $this->$checkOut = $checkOut;
            $this->$quantity = $quantity;
            $this->$promoCode = $promoCode;
        }
    }
?>