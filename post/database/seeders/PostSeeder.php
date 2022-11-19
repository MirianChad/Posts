<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            "title"=>"არაფერია საშიში",
            "body"=>"დღეს ჩემმა მეგობარმა კბილი ამოიღო თავიდან ძალიან ეშინოდა მაგრამ რომ გამოვიდა ვერაფერი ვიგრძენიო ყოჩაღი გოგოა ნამდვილად",
            "author"=>"მირიან ქორქაშვილი",
            "active"=>1

        ]);

        Post::create([
            "title"=>"უმნიშვნელო მაგრამ სასიხარულო",
            "body"=>"რამდენიმე დღის წინ პირველად ვიყავი ვარკეთილში გასული საქმეს რომ მოვრჩი უკან ძალიან დაღლილი ვბრუნდებოდი მაგრამ
            შემდეგ ჩემმა მეგობრამა საკუთარი სახლის ავინიდან ხელი დამიქნია და ძალიან გავხალისდი 🥹",
            "author"=>"მარიანი",
            "active" =>1

        ]);

        Post::create([
            "title"=>"უელსი დავამარცხეთ",
            "body"=>"დღეს 19 ნოემბერს დაფიქსირდა ისტორიული ფაქტი საქართველოს მორაგბეთა ნაკრებმა უელსი ანგარიშით 12-13 დაამარცხა",
            "author"=>"საქართველოს რაგბის კავშირი",
            "active"=>1

        ]);

        Post::create([
            "title"=>"პრაიმჰაუსი",
            "body"=>"ვფიქრობ კოსტამ უნდა მოიგოს პროექტი(ფანი ვარ მისი) კაი მართლა კიარა საერთოდ არ ვუყურებ..",
            "author"=>"ნუკი კოშკელიშვილი",
            "active"=>0

        ]);

        Post::create([
            "title"=>"კვარადონა",
            "body"=>"ვფიქრობ კვარაცხელია ბევრს მიაღწევს ნაპოლში მაგარი ბიჭია",
            "author"=>"ხიზანა",
            "active"=>1

        ]);

        Post::create([
            "title"=>"BMW თუ Mercedes?",
            "body"=>"რომელი გირჩევნიათ მეგობრებოოოოოო",
            "author"=>"ნეკა დოროყაშვილი",
            "active"=>1

        ]);

        Post::create([
            "title"=>"სიცოცხლე",
            "body"=>"რა მაგარი იქნება რომ ზუსტად ჩვენნაირი ადამიანები სხვაგანაც არსებობდნენ ანუ სხვა პლანეტაზე და აი მაგალითად ისეთი ტრანსპორტი
            რომ გვქონდეს როგორც რუსთავიდან ხაშურში ჩავდივართ დედამიწიდან სხვა პლანეტაზე რომ ვესტუმროთ მამიდას",
            "author"=>"ჯანსუღ ჩარკვიანი",
            "active"=>0

        ]);

        Post::create([
            "title"=>"random title 1",
            "body"=>"random body 1",
            "author"=>"random author 1",
            "active"=>0

        ]);

        Post::create([
            "title"=>"random title 2",
            "body"=>"random body 2",
            "author"=>"random author 2",
            "active"=>0

        ]);


        Post::create([
            "title"=>"random title 3",
            "body"=>"random body 3",
            "author"=>"random author 3",
            "active"=>0

        ]);



    }
}
