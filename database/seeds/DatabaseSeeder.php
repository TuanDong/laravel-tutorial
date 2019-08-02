<?php

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
        $this->call(ProductImageSeeder::class);
        // DB::table('users')->insert([
        //     'username' => 'admin',
        //     'email' => 'admin.@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
    }
}

class CateSeeder extends Seeder
{
    public function run()
    {
        DB::table('cates')->insert([
            ['name'=>'Women','alias'=>'new-trend-women','order'=>'new-trend-women','parent_id'=>'0','keywords'=>'fashion women','description'=>'thời trang nữ'],
            ['name'=>'Men','alias'=>'new-trend-men','order'=>'new-trend-men','parent_id'=>'0','keywords'=>'fashion men','description'=>'thời trang nam'],
            ['name'=>'Watches','alias'=>'spring-watches','order'=>'spring-watches','parent_id'=>'0','keywords'=>'watches fashion','description'=>'Đồng hồ thời trang'],
            ['name'=>'Bags','alias'=>'spring-Bags','order'=>'spring-Bags','parent_id'=>'0','keywords'=>'Bags fashion','description'=>'Túi sách thời trang'],
            ['name'=>'Accessorories','alias'=>'spring-Accessorories','order'=>'spring-Accessorories','parent_id'=>'0','keywords'=>'Accessorories','description'=>'phụ kiên thời trang'],
        ]);
    }
}
class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'Áo sơ mi nam 1','alias'=>'ao-so-mi-nam-1','price'=>5000,'intro'=>'ao-so-mi-nam-1','content'=>'áo sơ mi đẹp hãy đến với shop của chúng tôi','image'=>'product-03.jpg','keywords'=>'fashion men','description'=>'Áo sơ mi đẹp, tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi đủ size cho mọi người','user_id'=>1,'cate_id'=>2],
            ['name'=>'Áo sơ mi nam 2','alias'=>'ao-so-mi-nam-2','price'=>4000,'intro'=>'ao-so-mi-nam-2','content'=>'áo sơ mi đẹp hãy đến với shop của chúng tôi','image'=>'product-11.jpg','keywords'=>'fashion men','description'=>'Áo sơ mi đẹp, tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi đủ size cho mọi người','user_id'=>1,'cate_id'=>2],
            ['name'=>'Áo sơ mi nữ 1','alias'=>'ao-so-mi-nu-1','price'=>3500,'intro'=>'ao-so-mi-nu-1','content'=>'áo sơ mi đẹp hãy đến với shop của chúng tôi','image'=>'product-02.jpg','keywords'=>'fashion men','description'=>'Áo sơ mi đẹp, tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi đủ size cho mọi người','user_id'=>1,'cate_id'=>1],
            ['name'=>'Áo thun khoat nam ','alias'=>'ao-khoat-nam','price'=>4500,'intro'=>'ao-khoat-nam','content'=>'áo khoát đẹp hãy đến với shop của chúng tôi','image'=>'product-detail-02.jpg','keywords'=>'fashion men','description'=>'Áo sơ mi đẹp, tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi đủ size cho mọi người','user_id'=>1,'cate_id'=>2],
            ['name'=>'Áo thun nữ 1','alias'=>'ao-thun-nu-1','price'=>3000,'intro'=>'ao-thun-nu-1','content'=>'áo thun đẹp hãy đến với shop của chúng tôi','image'=>'product-01.jpg','keywords'=>'fashion women','description'=>'Áo thun đẹp, tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi đủ size cho mọi người','user_id'=>1,'cate_id'=>1],
            ['name'=>'Áo thun nữ 2','alias'=>'ao-thun-nu-2','price'=>3500,'intro'=>'ao-thun-nu-2','content'=>'áo thun đẹp hãy đến với shop của chúng tôi','image'=>'product-13.jpg','keywords'=>'fashion women','description'=>'Áo thun đẹp, tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi đủ size cho mọi người','user_id'=>1,'cate_id'=>1],
            ['name'=>'Áo thun nữ 3','alias'=>'ao-thun-nu-3','price'=>3000,'intro'=>'ao-thun-nu-3','content'=>'áo thun đẹp hãy đến với shop của chúng tôi','image'=>'product-16.jpg','keywords'=>'fashion women','description'=>'Áo thun đẹp, tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi đủ size cho mọi người','user_id'=>1,'cate_id'=>1],
            ['name'=>'Đông hồ thời trang 1','alias'=>'dong-ho-thoi-trang-1','price'=>30000,'intro'=>'dong-ho-thoi-trang-1','content'=>'Đồng thời trang đẹp hãy đến với shop của chúng tôi','image'=>'product-15.jpg','keywords'=>'watch fashion','description'=>'Đồng hồ thời trang, tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi','user_id'=>1,'cate_id'=>3],
            ['name'=>'Túi xách thời trang','alias'=>'tui-xach-thoi-trang','price'=>14000,'intro'=>'tui-xach-thoi-trang','content'=>'Tui xách thời trang hãy đến với shop của chúng tôi','image'=>'tui-xach.jpg','keywords'=>'bags fashion','description'=>'Tui xách thời trang, tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi','user_id'=>1,'cate_id'=>4],
            ['name'=>'Giày thời trang','alias'=>'giay-thoi-trang','price'=>25000,'intro'=>'giay-thoi-trang','content'=>'Giầy thời trang hãy đến với shop của chúng tôi','image'=>'product-09.jpg','keywords'=>'shose fashion','description'=>'Giày thời trang tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi đủ size cho mọi người','user_id'=>1,'cate_id'=>5],
            ['name'=>'Đông hồ thời trang 2','alias'=>'dong-ho-thoi-trang-2','price'=>35000,'intro'=>'dong-ho-thoi-trang-2','content'=>'Đồng thời trang đẹp hãy đến với shop của chúng tôi','image'=>'product-06.jpg','keywords'=>'watch fashion','description'=>'Đồng hồ thời trang, tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi','user_id'=>1,'cate_id'=>3],
            ['name'=>'Thắt lưng thời trang','alias'=>'that-lung-thoi-trang','price'=>25000,'intro'=>'that-lung-thoi-trang','content'=>'Thắt lưng thời trang hãy đến với shop của chúng tôi','image'=>'product-12.jpg','keywords'=>'shose fashion','description'=>'Thắt lưng thời trang tạo dáng, phong cách lịch sự, thích hợp cho mọi lứa tuổi đủ size cho mọi người','user_id'=>1,'cate_id'=>5],
        ]);
    }
}
class ProductImageSeeder extends Seeder
{
    public function run()
    {

        DB::table('product_images')->insert([
            ['images'=>'product-detail-01.jpg','product_id'=>4],
            ['images'=>'product-detail-02.jpg','product_id'=>4],
            ['images'=>'product-detail-03.jpg','product_id'=>4],
            ['images'=>'product-detail-01.jpg','product_id'=>1],
            ['images'=>'product-detail-02.jpg','product_id'=>1],
            ['images'=>'product-detail-03.jpg','product_id'=>3],
        ]);
    }
}
