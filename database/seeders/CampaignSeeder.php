<?php
// Samedy
namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $test_campaigns = [
            [
                'user_id' => 1,

                'title' => "Building Decent School For Chhuk Village in Kompot",

                'summary' => 'To build a decent school for Chhuk Village, we need to raise funds for materials and labor. We can do this by launching a crowdfunding campaign, reaching out to potential donors and sponsors, and organizing fundraising events. By working together with the community and local organizations, we can create a sustainable and affordable solution to improve the education system in the area. We can also leverage social media and digital marketing to spread the word and engage more people in our cause.

                In addition to fundraising, we can also explore other creative solutions such as applying for grants, partnering with schools and universities, and collaborating with local businesses to support our efforts. With determination, hard work, and the support of the community, we can make a significant impact and give the children of Chhuk Village the opportunity to receive a quality education in a safe and comfortable environment.',

                'purpose' => "By building a decent school for the children in Chhuk Village, the campaign aims to provide a better education environment that will benefit the children and the community in the long run. With a proper school infrastructure, the children will have a safer and more conducive learning environment, which can help improve their academic performance and overall well-being.

                In the long term, the campaign's impact can extend beyond the classroom and benefit the wider community. With better education opportunities, the children will have greater opportunities to pursue their dreams and contribute positively to their community. This can lead to a more educated and empowered generation that is better equipped to tackle the challenges of the future.
                
                Furthermore, a well-built school can serve as a community center and a hub for social activities. This can help bring people together and promote a sense of community and unity. It can also attract other resources and development projects to the area, further improving the standard of living for the people in Chhuk Village.",

                'goal' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odit obcaecati voluptas esse quam quia iusto voluptatem neque fugiat tempore repudiandae, iste atque, libero ullam vitae quos, quo accusantium fuga.',

                'image_thumbnail_path' => 'leaves_img.webp',
            ],

            [
                'user_id' => 1,

                'title' => "Building Decent School in Kompot",

                'summary' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum obcaecati vero quod doloremque qui cupiditate cumque! Iure, fugiat reiciendis saepe odio sit dolor. Necessitatibus, dignissimos aut maxime nobis quasi non!',

                'purpose' => "By building a decent school for the children in Chhuk Village, the campaign aims to provide a better education environment that will benefit the children and the community in the long run. With a proper school infrastructure, the children will have a safer and more conducive learning environment, which can help improve their academic performance and overall well-being.

                In the long term, the campaign's impact can extend beyond the classroom and benefit the wider community. With better education opportunities, the children will have greater opportunities to pursue their dreams and contribute positively to their community. This can lead to a more educated and empowered generation that is better equipped to tackle the challenges of the future.",

                'goal' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odit obcaecati voluptas esse quam quia iusto voluptatem neque fugiat tempore repudiandae, iste atque, libero ullam vitae quos, quo accusantium fuga.',

                'image_thumbnail_path' => 'leaves_img.webp',
            ],

            [
                'user_id' => 1,

                'title' => "Building Decent School in Kompot",

                'summary' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum obcaecati vero quod doloremque qui cupiditate cumque! Iure, fugiat reiciendis saepe odio sit dolor. Necessitatibus, dignissimos aut maxime nobis quasi non!',

                'purpose' => "By building a decent school for the children in Chhuk Village, the campaign aims to provide a better education environment that will benefit the children and the community in the long run. With a proper school infrastructure, the children will have a safer and more conducive learning environment, which can help improve their academic performance and overall well-being.

                In the long term, the campaign's impact can extend beyond the classroom and benefit the wider community. With better education opportunities, the children will have greater opportunities to pursue their dreams and contribute positively to their community. This can lead to a more educated and empowered generation that is better equipped to tackle the challenges of the future.",

                'goal' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odit obcaecati voluptas esse quam quia iusto voluptatem neque fugiat tempore repudiandae, iste atque, libero ullam vitae quos, quo accusantium fuga.',

                'image_thumbnail_path' => 'leaves_img.webp',
            ],

            [
                'user_id' => 1,

                'title' => "Building Decent School in Kompot",

                'summary' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum obcaecati vero quod doloremque qui cupiditate cumque! Iure, fugiat reiciendis saepe odio sit dolor. Necessitatibus, dignissimos aut maxime nobis quasi non!',

                'purpose' => "By building a decent school for the children in Chhuk Village, the campaign aims to provide a better education environment that will benefit the children and the community in the long run. With a proper school infrastructure, the children will have a safer and more conducive learning environment, which can help improve their academic performance and overall well-being.

                In the long term, the campaign's impact can extend beyond the classroom and benefit the wider community. With better education opportunities, the children will have greater opportunities to pursue their dreams and contribute positively to their community. This can lead to a more educated and empowered generation that is better equipped to tackle the challenges of the future.",

                'goal' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odit obcaecati voluptas esse quam quia iusto voluptatem neque fugiat tempore repudiandae, iste atque, libero ullam vitae quos, quo accusantium fuga.',

                'image_thumbnail_path' => 'leaves_img.webp',
            ],

            [
                'user_id' => 2,

                'title' => "User 2 Campaign",

                'summary' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum obcaecati vero quod doloremque qui cupiditate cumque! Iure, fugiat reiciendis saepe odio sit dolor. Necessitatibus, dignissimos aut maxime nobis quasi non!',

                'purpose' => "By building a decent school for the children in Chhuk Village, the campaign aims to provide a better education environment that will benefit the children and the community in the long run. With a proper school infrastructure, the children will have a safer and more conducive learning environment, which can help improve their academic performance and overall well-being.

                In the long term, the campaign's impact can extend beyond the classroom and benefit the wider community. With better education opportunities, the children will have greater opportunities to pursue their dreams and contribute positively to their community. This can lead to a more educated and empowered generation that is better equipped to tackle the challenges of the future.",

                'goal' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odit obcaecati voluptas esse quam quia iusto voluptatem neque fugiat tempore repudiandae, iste atque, libero ullam vitae quos, quo accusantium fuga.',

                'image_thumbnail_path' => 'leaves_img.webp',
            ],

            [
                'user_id' => 2,

                'title' => "User 2 Campaign",

                'summary' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum obcaecati vero quod doloremque qui cupiditate cumque! Iure, fugiat reiciendis saepe odio sit dolor. Necessitatibus, dignissimos aut maxime nobis quasi non!',

                'purpose' => "By building a decent school for the children in Chhuk Village, the campaign aims to provide a better education environment that will benefit the children and the community in the long run. With a proper school infrastructure, the children will have a safer and more conducive learning environment, which can help improve their academic performance and overall well-being.

                In the long term, the campaign's impact can extend beyond the classroom and benefit the wider community. With better education opportunities, the children will have greater opportunities to pursue their dreams and contribute positively to their community. This can lead to a more educated and empowered generation that is better equipped to tackle the challenges of the future.",

                'goal' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odit obcaecati voluptas esse quam quia iusto voluptatem neque fugiat tempore repudiandae, iste atque, libero ullam vitae quos, quo accusantium fuga.',

                'image_thumbnail_path' => 'leaves_img.webp',
            ],

            [
                'user_id' => 2,

                'title' => "User 2 Campaign",

                'summary' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum obcaecati vero quod doloremque qui cupiditate cumque! Iure, fugiat reiciendis saepe odio sit dolor. Necessitatibus, dignissimos aut maxime nobis quasi non!',

                'purpose' => "By building a decent school for the children in Chhuk Village, the campaign aims to provide a better education environment that will benefit the children and the community in the long run. With a proper school infrastructure, the children will have a safer and more conducive learning environment, which can help improve their academic performance and overall well-being.

                In the long term, the campaign's impact can extend beyond the classroom and benefit the wider community. With better education opportunities, the children will have greater opportunities to pursue their dreams and contribute positively to their community. This can lead to a more educated and empowered generation that is better equipped to tackle the challenges of the future.",

                'goal' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odit obcaecati voluptas esse quam quia iusto voluptatem neque fugiat tempore repudiandae, iste atque, libero ullam vitae quos, quo accusantium fuga.',

                'image_thumbnail_path' => 'leaves_img.webp',
            ],
            // [],
            // [],
            // [],
        ];

        foreach ($test_campaigns as $key => $value) {
            Campaign::create($value);
        }
    }
}
