<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'title' => 'CourierMan',
            'header_title' => 'CourierMan',
            'header_subtitle' => 'CourierMan is a Branch based courier management system. Courier or Parcel Sender will send from a branch. Receiver will receive from destination branch set on sending !',
            'service_title' => 'WHY WE BEST',
            'service_details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been',
            'aboutus_keyword' => NULL,
            'aboutus_title' => 'About Us',
            'aboutus_details' => '<div align=\"justify\">Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</div><div align=\"left\"><div><br></div><ul><li><font size=\"4\"><b>FIRST DELIVERY&nbsp;</b></font></li></ul><div><br></div><ul><li><font size=\"4\"><b>SECURED SERVICE&nbsp;</b></font></li></ul><div><br></div><ul><li><font size=\"4\"><b>WORLD WIDE SHIPPING&nbsp;</b></font></li></ul><div><br></div></div>',
            'testimonial_title' => 'Testimonial',
            'testimonial_details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been',
            'search_courier_title' => 'Search Courier',
            'search_courier_details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been',
            'footer_text' => '© 2020 - Copyright All rights reserved.',
            'gallery_title' => 'Photo Gallery',
            'gallery_details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been',
            'contact_title' => 'Contact Us',
            'contact_address' => 'Company Location, City, State, Country',
            'contact_phone' => '+0123456789',
            'contact_email' => 'admin@example.com',
            'address' => NULL,
            'color_code' => 'e41d3c',
            'email_notification' => '0',
            'email_sent_from' => 'admin@example.com',
            'email_template' => '<br><br>\r\n	<div class=\"contents\" style=\"max-width: 600px; margin: 0 auto; border: 2px solid #000036;\">\r\n\r\n<div class=\"header\" style=\"background-color: #000036; padding: 15px; text-align: center;\">\r\n	<div class=\"logo\" style=\"width: 260px;text-align: center; margin: 0 auto;\">\r\n		<img src=\"https://i.imgur.com/4NN55uD.png\" alt=\"COURIERMAN\" style=\"width: 100%;\">\r\n	</div>\r\n</div>\r\n\r\n<div class=\"mailtext\" style=\"padding: 30px 15px; background-color: #f0f8ff; font-family: \'Open Sans\', sans-serif; font-size: 16px; line-height: 26px;\">\r\n\r\nHi {{name}},\r\n<br><br>\r\n{{message}}\r\n<br><br>\r\n<br><br>\r\n</div>\r\n\r\n<div class=\"footer\" style=\"background-color: #000036; padding: 15px; text-align: center;\">\r\n<a href=\"https://courierman.com/\" style=\"	background-color: #2ecc71;\r\n	padding: 10px 0;\r\n	margin: 10px;\r\n	display: inline-block;\r\n	width: 100px;\r\n	text-transform: uppercase;\r\n	text-decoration: none;\r\n	color: #ffff;\r\n	font-weight: 600;\r\n	border-radius: 4px;\">Website</a>\r\n<a href=\"https://courierman.com/services\" style=\"	background-color: #2ecc71;\r\n	padding: 10px 0;\r\n	margin: 10px;\r\n	display: inline-block;\r\n	width: 100px;\r\n	text-transform: uppercase;\r\n	text-decoration: none;\r\n	color: #ffff;\r\n	font-weight: 600;\r\n	border-radius: 4px;\">Products</a>\r\n<a href=\"https://courierman.com/contact\" style=\"	background-color: #2ecc71;\r\n	padding: 10px 0;\r\n	margin: 10px;\r\n	display: inline-block;\r\n	width: 100px;\r\n	text-transform: uppercase;\r\n	text-decoration: none;\r\n	color: #ffff;\r\n	font-weight: 600;\r\n	border-radius: 4px;\">Contact</a>\r\n</div>\r\n\r\n\r\n<div class=\"footer\" style=\"background-color: #000036; padding: 15px; text-align: center; border-top: 1px solid rgba(255, 255, 255, 0.2);\">\r\n\r\n<strong style=\"color: #fff;\">© 2020 COURIERMAN. All Rights Reserved.</strong>\r\n<p style=\"color: #ddd;\">CourierMan is not partnered with any other \r\ncompany or person. We work as a team and do not have any reseller, \r\ndistributor or partner!</p>\r\n\r\n\r\n</div>\r\n\r\n	</div>\r\n<br><br>',
            'sms_api' => 'https://api.infobip.com/api/v3/sendsms/plain?user=****&amp;password=*****&amp;sender=CourierMan&amp;SMSText={{message}}&amp;GSM={{number}}&amp;type=longSMS',
            'sms_notification' => '0',
            'registration_verification' => '0',
            'email_verification' => '1',
            'sms_verification' => '0',
            'base_currency' => 'INR',
            'base_currency_symbol' => 'Rs.',
            'departure_courier' => '69',
            'upcoming_courier' => '800',
            'total_deliver' => '3658',
            'about_us_quote_one' => 'Lorem ipsum dolor sit amet',
            'about_us_quote_two' => 'Lorem ipsum dolor sit amet',
            'about_us_quote_three' => 'Lorem ipsum dolor sit amet',
            'map' => '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609823277!2d72.74109995709657!3d19.08219783958221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1602062932351!5m2!1sen!2sin\" width=\"625\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>',
            'created_at' => '2020-10-07 10:23:05',
            'updated_at'=> '2020-10-07 10:23:05',
        ]);
    }
}
