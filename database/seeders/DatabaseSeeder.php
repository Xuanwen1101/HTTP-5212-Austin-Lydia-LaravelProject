<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Content;
use App\Models\School;
use App\Models\Work;
use App\Models\Skill;
use App\Models\Blog;
use App\Models\Email;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();

        Content::truncate();
        Work::truncate();
        School::truncate();
        Skill::truncate();
        Blog::truncate();
        Email::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();

        Content::factory()->count(2)->create();
        Work::factory()->count(2)->create();
        School::factory()->count(2)->create();
        Skill::factory()->count(2)->create();
        Blog::factory()->count(2)->create();
        Email::factory()->count(2)->create();
            
    }
}
