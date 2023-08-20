<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected static $blogs;
    public static function allBlogs()
    {
        return[

            0=>['id'=>1,
                'category_id' =>1,
                'title'=>'ির্বাচন কমিশন গঠনে ভারতীয় সুপ্রিম কোর্টের যুগান্তকারী রায়',
                'image'=>'n1.webp',
                'short_description'=>'নির্বাচন কমিশন গঠনে ভারতীয় সুপ্রিম কোর্টের যুগান্তকারী রায়',
                'long_description'=>'সুপ্রিম কোর্টের বিচারপতি কে এম যোসেফের নেতৃত্বাধীন পাঁচ সদস্যের সাংবিধানিক বেঞ্চ আজ বৃহস্পতিবার এই ঐতিহাসিক রায় দিয়েছেন। এই বিষয়ে কেন্দ্রকে উপযুক্ত আইন প্রণয়নের নির্দেশ দেওয়া হয়েছে। তা না হওয়া পর্যন্ত সর্বোচ্চ আদালতের বেঁধে দেওয়া এই নতুন বিধি চালু থাকবে বলে রায়ে জানানো হয়েছে।',],
            1=>['id'=>2,
                'category_id' =>1,
                'title'=>'ঢাবির প্রক্টরিয়াল টিমের বিরুদ্ধে বছরে অর্ধকোটি টাকা চাঁদাবাজির অভিযোগ, তদন্তে কমিটি',
                'image'=>'n2.webp',
                'short_description'=>'ঢাবির প্রক্টরিয়াল টিমের বিরুদ্ধে বছরে অর্ধকোটি টাকা চাঁদাবাজির অভিযোগ, তদন্তে কমিটি',
                'long_description'=>'ঢাকা বিশ্ববিদ্যালয়ের (ঢাবি) প্রক্টরিয়াল টিমের বিরুদ্ধে ক্যাম্পাসসহ আশপাশের এলাকায় অবৈধ ভ্রাম্যমাণ দোকান বসিয়ে বছরে প্রায় অর্ধকোটি টাকা চাঁদাবাজির অভিযোগ উঠেছে। এই অভিযোগ তদন্তে তিন সদস্যের কমিটি করেছে বিশ্ববিদ্যালয় কর্তৃপক্ষ।',],
            2=>['id'=>3,
                'category_id' =>2,
                'title'=>'ধর্ষণের অভিযোগ মাথায় নিয়েও স্বস্তির খবর পেলেন হাকিমি',
                'image'=>'n3.webp',
                'short_description'=>'ধর্ষণের অভিযোগ মাথায় নিয়েও স্বস্তির খবর পেলেন হাকিমি',
                'long_description'=>'তদন্ত চলাকালে খেলা চালিয়ে যেতে কোনো বাধা নেই মরক্কোর এই ফুটবলারের। এমন তথ্যই জানিয়েছে ইএসপিএন। ফরাসি লিগে নেঁসের বিপক্ষে আগামী শনিবার খেলবে পিএসজি। সে ম্যাচেই খেলার সম্ভাবনা আছে হাকিমির।',],
            3=>['id'=>4,
                'category_id' =>2,
                'title'=>'সুরা আনআমে রয়েছে কিছু উপদেশ',
                'image'=>'n4.webp',
                'short_description'=>'সুরা আনআম পবিত্র কোরআনের ষষ্ঠ সুরা। মক্কায় অবতীর্ণ এই সুরার ২০ রুকু, ১৬৫ আয়াত। ',
                'long_description'=>'মোহাম্মদ (সা.) হিজরতের সময় মক্কায় অবতীর্ণ এই সুরার ছয়টি আয়াত মদিনায় অবতীর্ণ হয়। অংশীবাদের আলোচনা, বিশ্বাসীদের পুরস্কার, তওহিদের বর্ণনা, পরকালের জীবন, অমুসলিমদের দ্বারা অত্যাচারিত মহানবী (সা.) ও তাঁর সাহাবায়ে কিরামের জন্য সান্ত্বনা রয়েছে এ সুরায়।',],
            4=>[
                'id'=>5,
                'category_id' =>3,
                'title'=>'বিশ্ব চ্যাম্পিয়ন ম্যাক অ্যালিস্টারের বাসার ওয়াই–ফাই পাসওয়ার্ড জেনে নিন',
                'image'=>'n5.webp',
                'short_description'=>'বিশ্বকাপ জিততে কেমন লাগে? বিশ্বকাপজয়ী কোনো ফুটবলারকে প্রশ্নটি করা হলে সম্ভবত উত্তর শেষ হবে না। এই বিজয়ের অনুভূতি যে অনিবর্চনীয়। বারবার বিভিন্নভাবে প্রকাশ করতে ইচ্ছা করে। কত রকম কথা যে মনের মধ্যে জমে থাকে!',
                'long_description'=>'ব্রাইটনের আর্জেন্টাইন তারকা অ্যালেক্সিস ম্যাক অ্যালিস্টারের মনের কথাগুলো শুনতে তাঁর সঙ্গে যোগাযোগ করেছিলেন টিওয়াইসি স্পোর্টস–এর সংবাদকর্মী গাস্তন এদুল। ইংল্যান্ডে নিজের বাসায় বসে মাইক্রোফোন হাতে এদুলের সব প্রশ্নের জবাব দিয়েছেন ম্যাক অ্যালিস্টার। সঞ্চালক হিসেবে ছিলেন আরিয়েল রদ্রিগেজ।',
            ],
            5=>[
                'id'=>6,
                'category_id' =>3,
                'title'=>'কাজাখস্তানের তেল কিনছে জার্মানি, লাভ হচ্ছে রাশিয়ার',
                'image'=>'n6.webp',
                'short_description'=>'গত বছরের ২৪ ফেব্রুয়ারির রাশিয়া ও ইউক্রেন যুদ্ধের পর রাশিয়ার তেল আর কিনছে না জার্মানি।',
                'long_description'=>'তারা এখন তেল নিচ্ছে বর্তমান মধ্য এশিয়া ও সাবেক সোভিয়েত ইউনিয়নের দেশ কাজাখস্তান থেকে। চলতি সপ্তাহেই দ্রুঝবা পাইপলাইন দিয়ে জার্মানিতে তেল পাঠিয়েছে কাজাখস্তান। কাজাখস্তান থেকে জার্মানি তেল কিনলেও লাভবান হচ্ছে ভ্লাদিমির পুতিনের রাশিয়া।',
            ],
        ];
    }




    public static function getBlogDetails($id)
    {


        self::$blogs = self::allBlogs();
        foreach (self::$blogs as $blog)
        {
            if ($blog['id'] == $id)
            {
                return $blog;
            }
        }


    }

}