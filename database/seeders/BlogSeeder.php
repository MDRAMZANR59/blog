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
                    'title' => 'Natural',
                    'description' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga expedita quisquam at, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/1.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Football',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/2.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'title' => 'Tour',
                    'description' =>'Lorem ipsum dolor sit, amet consecsfsdat, facilis tempore id error cupiditate itaque quae autem asperiores, maxime sequi excepturi repellendus molestias hic repudiandae! Unde quas ut quisquam delectus, et hic voluptates minus laborum sequi dolorem repellat atque voluptatum qui dolorum similique maxime ullam vero vitae sint reprehenderit consectetur aliquam id, consequatur praesentium? Quod dolorem voluptates, suscipit obcaecati blanditiis quaerat quasi ducimus placeat provident laboriosam. Tempore cupiditate quaerat eligendi reprehenderit earum. Blanditiis adipisci, deleniti, repellendus at esse, officiis corrupti eius minus officia porro culpa distinctio accusamus eligendi labore maiores cupiditate? Accusantium molestiae facilis ea possimus enim!',
                    'image' => 'images/3.jpg',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]
            ]
        );
    }
}
