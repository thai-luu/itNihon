<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class FashionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fashions')->insert([
            [
            'name' => "ラコステシャツ",
            'species' => "シャツ",     // chủng loại 
            'img_url'=> "https://assets.lacoste.jp/product_images/67178/file/ph230e-001-fn.20181028070218896254843.mn.jpg", // link ảnh
            'description' => "ラコステ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ラコステシャツ",
            'species' => "シャツ",     // chủng loại 
            'img_url'=> "https://assets.lacoste.jp/product_images/67178/file/ph230e-001-fn.20181028070218896254843.mn.jpg", // link ảnh
            'description' => "ラコステ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ラコステシャツ",
            'species' => "シャツ",     // chủng loại 
            'img_url'=> "https://assets.lacoste.jp/product_images/67178/file/ph230e-001-fn.20181028070218896254843.mn.jpg", // link ảnh
            'description' => "ラコステ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ルイ・ヴィトンシャツ",
            'species' => "シャツ", // chủng loại 
            'img_url'=> "https://www.ccc-lab.net/wp-content/uploads/2019/06/111-50.jpg", // link ảnh
            'description' => "ルイ・ヴィトン",
            'sold'=> "100", // số lượng đã bán
            'price' => "1500", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ルイ・ヴィトンシャツ",
            'species' => "シャツ", // chủng loại 
            'img_url'=> "https://www.ccc-lab.net/wp-content/uploads/2019/06/111-50.jpg", // link ảnh
            'description' => "ルイ・ヴィトン",
            'sold'=> "100", // số lượng đã bán
            'price' => "1500", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ルイ・ヴィトンシャツ",
            'species' => "シャツ", // chủng loại 
            'img_url'=> "https://www.ccc-lab.net/wp-content/uploads/2019/06/111-50.jpg", // link ảnh
            'description' => "ルイ・ヴィトン",
            'sold'=> "100", // số lượng đã bán
            'price' => "1500", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "グッチシャツ",
            'species' => "シャツ", // chủng loại 
            'img_url'=> "https://static-buyma-com.akamaized.net/resizer/item/210419/0067744330/346930653/org.jpg?w=1500&h=1500", // link ảnh
            'description' => "グッチ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1200", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "グッチシャツ",
            'species' => "シャツ", // chủng loại 
            'img_url'=> "https://static-buyma-com.akamaized.net/resizer/item/210419/0067744330/346930653/org.jpg?w=1500&h=1500", // link ảnh
            'description' => "グッチ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1200", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "グッチシャツ",
            'species' => "シャツ", // chủng loại 
            'img_url'=> "https://static-buyma-com.akamaized.net/resizer/item/210419/0067744330/346930653/org.jpg?w=1500&h=1500", // link ảnh
            'description' => "グッチ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1200", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "グッチセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "https://media.bizwebmedia.net/Sites/127046/data/images/2018/10/4852584ao_len_gucci_gg_cardigan_chuan_authentic.jpg?0", // link ảnh
            'description' => "グッチ",
            'sold'=> "100", // số lượng đã bán
            'price' => "2000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "グッチセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "https://media.bizwebmedia.net/Sites/127046/data/images/2018/10/4852584ao_len_gucci_gg_cardigan_chuan_authentic.jpg?0", // link ảnh
            'description' => "グッチ",
            'sold'=> "100", // số lượng đã bán
            'price' => "2000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "グッチセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "https://media.bizwebmedia.net/Sites/127046/data/images/2018/10/4852584ao_len_gucci_gg_cardigan_chuan_authentic.jpg?0", // link ảnh
            'description' => "グッチ",
            'sold'=> "100", // số lượng đã bán
            'price' => "2000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ユニクロセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "http://product.hstatic.net/1000209952/product/ao-len-cashmere-nam-uniqlo-32_419200_77ae069236504a58a5e7069af5f591f6_grande.jpg", // link ảnh
            'description' => "ユニクロ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ユニクロセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "http://product.hstatic.net/1000209952/product/ao-len-cashmere-nam-uniqlo-32_419200_77ae069236504a58a5e7069af5f591f6_grande.jpg", // link ảnh
            'description' => "ユニクロ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ユニクロセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "http://product.hstatic.net/1000209952/product/ao-len-cashmere-nam-uniqlo-32_419200_77ae069236504a58a5e7069af5f591f6_grande.jpg", // link ảnh
            'description' => "ユニクロ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ユニクロパーカー",
            'species' => "パーカー", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/f8f2ebcdb3bfeb1e1aa11fb5a8c6aab0", // link ảnh
            'description' => "ユニクロ",
            'sold'=> "100", // số lượng đã bán
            'price' => "800", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ユニクロパーカー",
            'species' => "パーカー", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/f8f2ebcdb3bfeb1e1aa11fb5a8c6aab0", // link ảnh
            'description' => "ユニクロ",
            'sold'=> "100", // số lượng đã bán
            'price' => "800", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ユニクロパーカー",
            'species' => "パーカー", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/f8f2ebcdb3bfeb1e1aa11fb5a8c6aab0", // link ảnh
            'description' => "ユニクロ",
            'sold'=> "100", // số lượng đã bán
            'price' => "800", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "アディダススポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://vn-live-05.slatic.net/p/ffe465da2028b0daf2f295904f1f4619.jpg_720x720q80.jpg_.webp", // link ảnh
            'description' => "アディダス",
            'sold'=> "100", // số lượng đã bán
            'price' => "1200", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "アディダススポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://vn-live-05.slatic.net/p/ffe465da2028b0daf2f295904f1f4619.jpg_720x720q80.jpg_.webp", // link ảnh
            'description' => "アディダス",
            'sold'=> "100", // số lượng đã bán
            'price' => "1200", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "アディダススポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://vn-live-05.slatic.net/p/ffe465da2028b0daf2f295904f1f4619.jpg_720x720q80.jpg_.webp", // link ảnh
            'description' => "アディダス",
            'sold'=> "100", // số lượng đã bán
            'price' => "1200", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "リーバイスジーンズ",
            'species' => "ジーンズ", // chủng loại 
            'img_url'=> "https://saigonnewstyles.com/public/cloud/common/SanPham/QUAN-JEAN-LEVIS-514-0742-STRAIGHT-FIT/2.jpg", // link ảnh
            'description' => "リーバイス",
            'sold'=> "100", // số lượng đã bán
            'price' => "1400", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "リーバイスジーンズ",
            'species' => "ジーンズ", // chủng loại 
            'img_url'=> "https://saigonnewstyles.com/public/cloud/common/SanPham/QUAN-JEAN-LEVIS-514-0742-STRAIGHT-FIT/2.jpg", // link ảnh
            'description' => "リーバイス",
            'sold'=> "100", // số lượng đã bán
            'price' => "1400", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "リーバイスジーンズ",
            'species' => "ジーンズ", // chủng loại 
            'img_url'=> "https://saigonnewstyles.com/public/cloud/common/SanPham/QUAN-JEAN-LEVIS-514-0742-STRAIGHT-FIT/2.jpg", // link ảnh
            'description' => "リーバイス",
            'sold'=> "100", // số lượng đã bán
            'price' => "1400", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "チャンピオンライフジャケット",
            'species' => "ライフジャケット", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/b609adda474b82566738b6a8c6bf610c", // link ảnh
            'description' => "チャンピオン",
            'sold'=> "100", // số lượng đã bán
            'price' => "1800", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "チャンピオンライフジャケット",
            'species' => "ライフジャケット", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/b609adda474b82566738b6a8c6bf610c", // link ảnh
            'description' => "チャンピオン",
            'sold'=> "100", // số lượng đã bán
            'price' => "1800", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "チャンピオンライフジャケット",
            'species' => "ライフジャケット", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/b609adda474b82566738b6a8c6bf610c", // link ảnh
            'description' => "チャンピオン",
            'sold'=> "100", // số lượng đã bán
            'price' => "1800", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "チャンピオンセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "https://vn-live-05.slatic.net/original/e97fae894702714199ef001c85299c3a.jpg_720x720q80.jpg_.webp", // link ảnh
            'description' => "チャンピオン",
            'sold'=> "100", // số lượng đã bán
            'price' => "800", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "チャンピオンセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "https://vn-live-05.slatic.net/original/e97fae894702714199ef001c85299c3a.jpg_720x720q80.jpg_.webp", // link ảnh
            'description' => "チャンピオン",
            'sold'=> "100", // số lượng đã bán
            'price' => "800", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "チャンピオンセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "https://vn-live-05.slatic.net/original/e97fae894702714199ef001c85299c3a.jpg_720x720q80.jpg_.webp", // link ảnh
            'description' => "チャンピオン",
            'sold'=> "100", // số lượng đã bán
            'price' => "800", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ナイキジョガーパンツ",
            'species' => "ジョガーパンツ", // chủng loại 
            'img_url'=> "https://thesneakerhouse.com/wp-content/uploads/2019/12/Men_s-Swoosh-Logo1.jpg", // link ảnh
            'description' => "ナイキ",
            'sold'=> "90", // số lượng đã bán
            'price' => "1100", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ナイキジョガーパンツ",
            'species' => "ジョガーパンツ", // chủng loại 
            'img_url'=> "https://thesneakerhouse.com/wp-content/uploads/2019/12/Men_s-Swoosh-Logo1.jpg", // link ảnh
            'description' => "ナイキ",
            'sold'=> "150", // số lượng đã bán
            'price' => "1100", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ナイキジョガーパンツ",
            'species' => "ジョガーパンツ", // chủng loại 
            'img_url'=> "https://thesneakerhouse.com/wp-content/uploads/2019/12/Men_s-Swoosh-Logo1.jpg", // link ảnh
            'description' => "ナイキ",
            'sold'=> "110", // số lượng đã bán
            'price' => "1100", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "プーマTシャツ",
            'species' => "Tシャツ", // chủng loại 
            'img_url'=> "https://product.hstatic.net/1000008082/product/45_239fa4a09c93407fa5d63f7a4ff8251e_master.jpeg", // link ảnh
            'description' => "プーマ",
            'sold'=> "200", // số lượng đã bán
            'price' => "500", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "プーマTシャツ",
            'species' => "Tシャツ", // chủng loại 
            'img_url'=> "https://product.hstatic.net/1000008082/product/45_239fa4a09c93407fa5d63f7a4ff8251e_master.jpeg", // link ảnh
            'description' => "プーマ",
            'sold'=> "200", // số lượng đã bán
            'price' => "500", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "プーマTシャツ",
            'species' => "Tシャツ", // chủng loại 
            'img_url'=> "https://product.hstatic.net/1000008082/product/45_239fa4a09c93407fa5d63f7a4ff8251e_master.jpeg", // link ảnh
            'description' => "プーマ",
            'sold'=> "200", // số lượng đã bán
            'price' => "500", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        ]
    );
    }
    }

