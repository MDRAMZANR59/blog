<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert(
            [
                [
                    'title' => 'Natural Of Bangladesh',
                    'description' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga expedita quisquam at, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/1.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Tourism Sector Of Bangladesh',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/2.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => "Bangladesh's Green Heart",
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/3.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Cybersecurity',
                    'description' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga expedita quisquam at, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/4.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Football',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/5.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Cricket',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/6.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'ICT',
                    'description' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga expedita quisquam at, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/7.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => '36 July',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/8.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Sundarbans Stories',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/9.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Dhaka University',
                    'description' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga expedita quisquam at, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/10.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Jurny By Train',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/11.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Immigration',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/12.png',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Politice Of Bangladesh',
                    'description' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga expedita quisquam at, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/13.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Traffic Jam',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/14.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => '1971 Of Bangladesh',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/15.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
            ]
        );
    }
}
