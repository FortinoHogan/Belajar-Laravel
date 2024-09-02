<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(3)->create();

        User::create([
            'name' => 'Fortino Hogan',
            'username' => 'fortinohogan',
            'email' => 'fortinohogan@gmail.com',
            'password' => bcrypt('asdasd'),
        ]);

        // User::create([
        //     'name' => 'Fortino Hogan Hadiprodjo',
        //     'email' => 'fortinohoganhadiprodjo@gmail.com',
        //     'password' => bcrypt('asdasd'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A et maxime, voluptatem blanditiis assumenda beatae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia illo minus assumenda consequuntur dolorum at, quaerat nostrum esse in corporis cum. Dolorem error cumque voluptatem reprehenderit, excepturi nisi voluptatum ex sunt. Sed ad maxime eveniet! Dicta expedita dolore laboriosam illum harum, fugiat facilis quos, amet rerum quisquam beatae, dolorem libero animi! Modi libero recusandae, dicta quidem minus eligendi iste ratione dolor. Voluptates quis laborum magnam? Laudantium, nobis et! Ratione, similique. Similique quo odit non ipsum. Numquam deserunt eligendi libero odio animi aspernatur doloremque exercitationem voluptate, similique sunt illo porro, eveniet velit adipisci quibusdam praesentium incidunt sapiente blanditiis! Autem, quibusdam iusto.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A et maxime, voluptatem blanditiis assumenda beatae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia illo minus assumenda consequuntur dolorum at, quaerat nostrum esse in corporis cum. Dolorem error cumque voluptatem reprehenderit, excepturi nisi voluptatum ex sunt. Sed ad maxime eveniet! Dicta expedita dolore laboriosam illum harum, fugiat facilis quos, amet rerum quisquam beatae, dolorem libero animi! Modi libero recusandae, dicta quidem minus eligendi iste ratione dolor. Voluptates quis laborum magnam? Laudantium, nobis et! Ratione, similique. Similique quo odit non ipsum. Numquam deserunt eligendi libero odio animi aspernatur doloremque exercitationem voluptate, similique sunt illo porro, eveniet velit adipisci quibusdam praesentium incidunt sapiente blanditiis! Autem, quibusdam iusto.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A et maxime, voluptatem blanditiis assumenda beatae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia illo minus assumenda consequuntur dolorum at, quaerat nostrum esse in corporis cum. Dolorem error cumque voluptatem reprehenderit, excepturi nisi voluptatum ex sunt. Sed ad maxime eveniet! Dicta expedita dolore laboriosam illum harum, fugiat facilis quos, amet rerum quisquam beatae, dolorem libero animi! Modi libero recusandae, dicta quidem minus eligendi iste ratione dolor. Voluptates quis laborum magnam? Laudantium, nobis et! Ratione, similique. Similique quo odit non ipsum. Numquam deserunt eligendi libero odio animi aspernatur doloremque exercitationem voluptate, similique sunt illo porro, eveniet velit adipisci quibusdam praesentium incidunt sapiente blanditiis! Autem, quibusdam iusto.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A et maxime, voluptatem blanditiis assumenda beatae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia illo minus assumenda consequuntur dolorum at, quaerat nostrum esse in corporis cum. Dolorem error cumque voluptatem reprehenderit, excepturi nisi voluptatum ex sunt. Sed ad maxime eveniet! Dicta expedita dolore laboriosam illum harum, fugiat facilis quos, amet rerum quisquam beatae, dolorem libero animi! Modi libero recusandae, dicta quidem minus eligendi iste ratione dolor. Voluptates quis laborum magnam? Laudantium, nobis et! Ratione, similique. Similique quo odit non ipsum. Numquam deserunt eligendi libero odio animi aspernatur doloremque exercitationem voluptate, similique sunt illo porro, eveniet velit adipisci quibusdam praesentium incidunt sapiente blanditiis! Autem, quibusdam iusto.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
