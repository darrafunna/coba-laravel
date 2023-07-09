<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //seeding secara manual
        User::create([
            'name' => 'Darra Funna',
            'username' => 'darrafunna',
            'email' => 'darrafunna@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Ismail bin Mail',
        //     'email' => 'mail@gmail.com',
        //     'password' => bcrypt('ghkj')
        // ]);

        // User::create([
        //     'name' => 'Kak Rose',
        //     'email' => 'rosecantek@gmail.com',
        //     'password' => bcrypt('uoljk')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion'
        ]);

        Category::create([
            'name' => 'Beauty',
            'slug' => 'beauty'
        ]);

        Category::create([
            'name' => 'Health',
            'slug' => 'health'
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla
        //                 debitis vel aut. Deserunt nam dignissimosquas similique harum sed provident magnam vitae culpa error nisi voluptatem
        //                 blanditiis id, hic veniam, autem vel remitaque nobis rerum',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur
        //                 adipisicing elit. Nulla debitis vel aut. Deserunt nam dignissimosquas similique harum sed provident magnam vitae
        //                 culpa error nisi voluptatem blanditiis id, hic veniam, autem vel remitaquenobis rerum, exercitationem quod?
        //                 Distinctio debitis dolor animi culpa earum ut modi molestiae necessitatibusiste, minima omnis? Recusandae ipsa
        //                 dolore vero, necessitatibus error iste dolorum molestias quo porro qui, temporibus harum dolor, expedita mollitia
        //                 tenetur iusto commodi voluptatum quas quam. Enim dolorum rem iure odio inventore? Similique eius illo sequi
        //                 deserunt? </p><p>Perspiciatis harum, aliquam cum impedit soluta tempora quas tempore commodi doloremque nulla quaerat, similique eaid?
        //                 Eos odio, accusamus cumque aperiam, assumenda excepturi magnam aliquam facere vitae impedit et. Eveniet repudiandae
        //                 perspiciatis officiis soluta alias possimus, repellat reprehenderit et quidem vitae eligendi quos maiores aliquid
        //                 minus odit suscipit provident amet inventore! Soluta officia nostrum odit facilis perspiciatis eligendi enim quasi
        //                 quia itaque necessitatibus illum nam nemo dolorum culpa, aliquid assumenda reiciendis ipsa quidem sed maiores
        //                 asperiores molestias iure inventore. Porro error officiis fugiat ullam repellat vitae provident quis accusantium
        //                 dolorem aperiam! Provident perspiciatis doloribus dignissimos. Aliquid vel corporis perspiciatiscum accusantium
        //                 obcaecati delectus molestiae, hic architecto. Perspiciatis officia, tempora dolorum ipsa dicta necessitatibus
        //                 debitis dolore.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla
        //                 debitis vel aut. Deserunt nam dignissimosquas similique harum sed provident magnam vitae culpa error nisi voluptatem
        //                 blanditiis id, hic veniam, autem vel remitaque nobis rerum',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur
        //                 adipisicing elit. Nulla debitis vel aut. Deserunt nam dignissimosquas similique harum sed provident magnam vitae
        //                 culpa error nisi voluptatem blanditiis id, hic veniam, autem vel remitaquenobis rerum, exercitationem quod?
        //                 Distinctio debitis dolor animi culpa earum ut modi molestiae necessitatibusiste, minima omnis? Recusandae ipsa
        //                 dolore vero, necessitatibus error iste dolorum molestias quo porro qui, temporibus harum dolor, expedita mollitia
        //                 tenetur iusto commodi voluptatum quas quam. Enim dolorum rem iure odio inventore? Similique eius illo sequi
        //                 deserunt? </p><p>Perspiciatis harum, aliquam cum impedit soluta tempora quas tempore commodi doloremque nulla quaerat, similique eaid?
        //                 Eos odio, accusamus cumque aperiam, assumenda excepturi magnam aliquam facere vitae impedit et. Eveniet repudiandae
        //                 perspiciatis officiis soluta alias possimus, repellat reprehenderit et quidem vitae eligendi quos maiores aliquid
        //                 minus odit suscipit provident amet inventore! Soluta officia nostrum odit facilis perspiciatis eligendi enim quasi
        //                 quia itaque necessitatibus illum nam nemo dolorum culpa, aliquid assumenda reiciendis ipsa quidem sed maiores
        //                 asperiores molestias iure inventore. Porro error officiis fugiat ullam repellat vitae provident quis accusantium
        //                 dolorem aperiam! Provident perspiciatis doloribus dignissimos. Aliquid vel corporis perspiciatiscum accusantium
        //                 obcaecati delectus molestiae, hic architecto. Perspiciatis officia, tempora dolorum ipsa dicta necessitatibus
        //                 debitis dolore.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla
        //                 debitis vel aut. Deserunt nam dignissimosquas similique harum sed provident magnam vitae culpa error nisi voluptatem
        //                 blanditiis id, hic veniam, autem vel remitaque nobis rerum',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur
        //                 adipisicing elit. Nulla debitis vel aut. Deserunt nam dignissimosquas similique harum sed provident magnam vitae
        //                 culpa error nisi voluptatem blanditiis id, hic veniam, autem vel remitaquenobis rerum, exercitationem quod?
        //                 Distinctio debitis dolor animi culpa earum ut modi molestiae necessitatibusiste, minima omnis? Recusandae ipsa
        //                 dolore vero, necessitatibus error iste dolorum molestias quo porro qui, temporibus harum dolor, expedita mollitia
        //                 tenetur iusto commodi voluptatum quas quam. Enim dolorum rem iure odio inventore? Similique eius illo sequi
        //                 deserunt? </p><p>Perspiciatis harum, aliquam cum impedit soluta tempora quas tempore commodi doloremque nulla quaerat, similique eaid?
        //                 Eos odio, accusamus cumque aperiam, assumenda excepturi magnam aliquam facere vitae impedit et. Eveniet repudiandae
        //                 perspiciatis officiis soluta alias possimus, repellat reprehenderit et quidem vitae eligendi quos maiores aliquid
        //                 minus odit suscipit provident amet inventore! Soluta officia nostrum odit facilis perspiciatis eligendi enim quasi
        //                 quia itaque necessitatibus illum nam nemo dolorum culpa, aliquid assumenda reiciendis ipsa quidem sed maiores
        //                 asperiores molestias iure inventore. Porro error officiis fugiat ullam repellat vitae provident quis accusantium
        //                 dolorem aperiam! Provident perspiciatis doloribus dignissimos. Aliquid vel corporis perspiciatiscum accusantium
        //                 obcaecati delectus molestiae, hic architecto. Perspiciatis officia, tempora dolorum ipsa dicta necessitatibus
        //                 debitis dolore.</p>',
        //     'category_id' => 2,
        //     'user_id' => 3
        // ]);
    }
}
