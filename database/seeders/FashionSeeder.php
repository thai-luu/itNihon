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
            'style' => 1,
            'sex' => 1,
        ],
        [
            'name' => "ルイ・ヴィトンシャツ",
            'species' => "シャツ", // chủng loại 
            'img_url'=> "https://komehyo.jp/contents/images/goods/c12/2410024937707_1_b.jpg", // link ảnh
            'description' => "ルイ・ヴィトン",
            'sold'=> "100", // số lượng đã bán
            'price' => "1500", // giá cả
            'style' => 0,
            'sex' => 2
        ],
        [
            'name' => "グッチシャツ",
            'species' => "シャツ", // chủng loại 
            'img_url'=> "https://static-buyma-com.akamaized.net/resizer/item/210419/0067744330/346930653/org.jpg?w=1500&h=1500", // link ảnh
            'description' => "グッチ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1200", // giá cả
            'style' => 2,
            'sex' => 1
        ],
        [
            'name' => "グッチセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "https://media.bizwebmedia.net/Sites/127046/data/images/2018/10/4852584ao_len_gucci_gg_cardigan_chuan_authentic.jpg?0", // link ảnh
            'description' => "グッチ",
            'sold'=> "100", // số lượng đã bán
            'price' => "2000", // giá cả
            'style' => 3,
            'sex' => 0
        ],
        [
            'name' => "ユニクロセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "http://product.hstatic.net/1000209952/product/ao-len-cashmere-nam-uniqlo-32_419200_77ae069236504a58a5e7069af5f591f6_grande.jpg", // link ảnh
            'description' => "ユニクロ",
            'sold'=> "100", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => 1,
            'sex' => 1
        ],
        [
            'name' => "ユニクロパーカー",
            'species' => "パーカー", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/f8f2ebcdb3bfeb1e1aa11fb5a8c6aab0", // link ảnh
            'description' => "ユニクロ",
            'sold'=> "100", // số lượng đã bán
            'price' => "800", // giá cả
            'style' => 1,
            'sex' => 2
        ],
        [
            'name' => "アディダススポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://vn-live-05.slatic.net/p/ffe465da2028b0daf2f295904f1f4619.jpg_720x720q80.jpg_.webp", // link ảnh
            'description' => "アディダス",
            'sold'=> "100", // số lượng đã bán
            'price' => "1200", // giá cả
            'style' => 0,
            'sex' => 2
        ],
        [
            'name' => "リーバイスジーンズ",
            'species' => "ジーンズ", // chủng loại 
            'img_url'=> "https://saigonnewstyles.com/public/cloud/common/SanPham/QUAN-JEAN-LEVIS-514-0742-STRAIGHT-FIT/2.jpg", // link ảnh
            'description' => "リーバイス",
            'sold'=> "100", // số lượng đã bán
            'price' => "1400", // giá cả
            'style' => 0,
            'sex' => 1
        ],
        [
            'name' => "チャンピオンライフジャケット",
            'species' => "ライフジャケット", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/b609adda474b82566738b6a8c6bf610c", // link ảnh
            'description' => "チャンピオン",
            'sold'=> "100", // số lượng đã bán
            'price' => "1800", // giá cả
            'style' => 3,
            'sex' => 2
        ],
        [
            'name' => "チャンピオンセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "https://vn-live-05.slatic.net/original/e97fae894702714199ef001c85299c3a.jpg_720x720q80.jpg_.webp", // link ảnh
            'description' => "チャンピオン",
            'sold'=> "100", // số lượng đã bán
            'price' => "800", // giá cả
            'style' => 3,
            'sex' => 1
        ],
        [
            'name' => "ナイキジョガーパンツ",
            'species' => "ジョガーパンツ", // chủng loại 
            'img_url'=> "https://thesneakerhouse.com/wp-content/uploads/2019/12/Men_s-Swoosh-Logo1.jpg", // link ảnh
            'description' => "ナイキ",
            'sold'=> "90", // số lượng đã bán
            'price' => "1100", // giá cả
            'style' => 3,
            'sex' => 0
        ],
        [
            'name' => "プーマTシャツ",
            'species' => "Tシャツ", // chủng loại 
            'img_url'=> "https://product.hstatic.net/1000008082/product/45_239fa4a09c93407fa5d63f7a4ff8251e_master.jpeg", // link ảnh
            'description' => "プーマ",
            'sold'=> "200", // số lượng đã bán
            'price' => "500", // giá cả
            'style' => 3,
            'sex' => 0
        ],
        [
            'name' => "プーマスポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/7cc8841443f47088d99b0d80241a0982", // link ảnh
            'description' => "プーマ",
            'sold'=> "200", // số lượng đã bán
            'price' => "500", // giá cả
            'style' => 4,
            'sex' => 0
        ],
        [
            'name' => "アディダススポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://assets.adidas.com/images/w_600,f_auto,q_auto/d37f4d4779544be0906aaa4500b8434e_9366/Bo_djo_the_thao_DJen_ED6215_01_laydown.jpg", // link ảnh
            'description' => "アディダス",
            'sold'=> "200", // số lượng đã bán
            'price' => "500", // giá cả
            'style' => 4,
            'sex' => 0
        ],
        [
            'name' => "ナイキスポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://img.yes24.vn/Upload/ProductImage/istyle24_Sports/1353553_L.jpg", // link ảnh
            'description' => "ナイキ",
            'sold'=> "200", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => 4,
            'sex' => 0
        ],
        [
            'name' => "チャンピオンスポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/add0abc3a7d0b3a9964b6ab49e2c4605", // link ảnh
            'description' => "チャンピオン",
            'sold'=> "200", // số lượng đã bán
            'price' => "2500", // giá cả
            'style' => 5,
            'sex' => 0
        ],
        [
            'name' => "ユニクロスポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://scontent.webpluscnd.net/photos-df/a-0/1912-2075675-1/bo-do-nam-uniqlo-mr18.png?atk=cb37c7391e146d0afb89176b97d5fa21", // link ảnh
            'description' => "ユニクロ",
            'sold'=> "200", // số lượng đã bán
            'price' => "1500", // giá cả
            'style' => 5,
            'sex' => 1
        ],
        [
            'name' => "グッチスーツ",
            'species' => "スーツ", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/84ec43ac5d0dfb5210c12e133fe5a6c8", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "5000", // giá cả
            'style' => 5,
            'sex' => 2
        ],
        [
            'name' => "シャネルスーツ",
            'species' => "スーツ", // chủng loại 
            'img_url'=> "https://i-ione.vnecdn.net/2021/09/19/jennie-chanel-6-4301-1632061782.jpg", // link ảnh
            'description' => "シャネル",
            'sold'=> "200", // số lượng đã bán
            'price' => "4000", // giá cả
            'style' => 1,
            'sex' => 0
        ],
        [
            'name' => "ルイヴィトンスーツ",
            'species' => "スーツ", // chủng loại 
            'img_url'=> "https://i.pinimg.com/originals/87/f8/2a/87f82a22dd41d2f708c61c0b579d7825.png", // link ảnh
            'description' => "ルイヴィトン",
            'sold'=> "200", // số lượng đã bán
            'price' => "6000", // giá cả
            'style' => 3,
            'sex' => 1
        ],
        [
            'name' => "ルイヴィトンのTシャツ",
            'species' => "Tシャツ", // chủng loại 
            'img_url'=> "https://ap.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-frill-blouse--FHBL13AQV000_PM2_Front%20view.png?wid=456&hei=456", // link ảnh
            'description' => "ルイヴィトン",
            'sold'=> "200", // số lượng đã bán
            'price' => "1760", // giá cả
            'style' => 3,
            'sex' => 2
        ],
        [
            'name' => "ルイヴィトンのTシャツ",
            'species' => "Tシャツ", // chủng loại 
            'img_url'=> "https://ap.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-cosmic-surfer-print-t-shirt--FMTS99LY9001_PM2_Front%20view.png?wid=456&hei=456", // link ảnh
            'description' => "ルイヴィトン",
            'sold'=> "200", // số lượng đã bán
            'price' => "1500", // giá cả
            'style' => 1,
            'sex' => 2
        ],
        [
            'name' => "ルイヴィトンシャツ",
            'species' => "シャツ", // chủng loại 
            'img_url'=> "https://ap.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-silk-bow-shirt--FMTP84NPZ535_PM2_Front%20view.png?wid=456&hei=456", // link ảnh
            'description' => "ルイヴィトン",
            'sold'=> "200", // số lượng đã bán
            'price' => "1500", // giá cả
            'style' => 4,
            'sex' => 2
        ],
        [
            'name' => "グッチシャツ",
            'species' => "シャツ", // chủng loại 
            'img_url'=> "https://media.gucci.com/style/White_South_0_160_316x316/1632407405/675614_Z3599_1239_002_100_0000_Light.jpg", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "2500", // giá cả
            'style' => 0,
            'sex' => 2
        ],
        [
            'name' => "グッチパンツ",
            'species' => "パンツ", // chủng loại 
            'img_url'=> "https://media.gucci.com/style/White_South_0_160_316x316/1630426513/677472_XNAL7_1000_001_100_0000_Light.jpg", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "4000", // giá cả
            'style' => 2,
            'sex' => 2
        ],
        [
            'name' => "グッチレギンス",
            'species' => "レギンス", // chủng loại 
            'img_url'=> "https://media.gucci.com/style/White_South_0_160_316x316/1638209822/672400_XJDS6_1082_001_100_0000_Light.jpg", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => 0,
            'sex' => 2
        ],
        [
            'name' => "グッチセーター",
            'species' => "セーター", // chủng loại 
            'img_url'=> "https://media.gucci.com/style/DarkGray_South_0_160_316x316/1633046411/683716_XKB4H_9791_001_100_0000_Light-Wool-knit-sweater-with-leather-detail.jpg", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "2200", // giá cả
            'style' => 2,
            'sex' => 1
        ],
        [
            'name' => "グッチパーカー",
            'species' => "パーカー", // chủng loại 
            'img_url'=> "https://media.gucci.com/style/White_South_0_160_316x316/1630081809/660282_XJDW6_1152_001_100_0000_Light.jpg", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "1500", // giá cả
            'style' => 1,
            'sex' => 1
        ],
        [
            'name' => "グッチパーカー",
            'species' => "パーカー", // chủng loại 
            'img_url'=> "https://media.gucci.com/style/White_South_0_160_316x316/1630081809/660282_XJDW6_1152_001_100_0000_Light.jpg", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "1500", // giá cả
            'style' => 1,
            'sex' => 1
        ],
        [
            'name' => "グッチジョガーパンツ",
            'species' => "ジョガーパンツ", // chủng loại 
            'img_url'=> "https://media.gucci.com/style/White_South_0_160_316x316/1629964808/676484_XJDXJ_4684_001_100_0000_Light.jpg", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "1400", // giá cả
            'style' => 1,
            'sex' => 1
        ],
        [
            'name' => "グッチジャケット",
            'species' => "ジャケット", // chủng loại 
            'img_url'=> "https://media.gucci.com/style/White_South_0_160_316x316/1634837442/673264_Z8AR0_4433_001_100_0000_Light.jpg", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "2300", // giá cả
            'style' => 5,
            'sex' => 1
        ],
        [
            'name' => "グッチパンツ",
            'species' => "パンツ", // chủng loại 
            'img_url'=> "https://media.gucci.com/style/White_South_0_160_316x316/1634836535/668588_Z8AQY_9727_001_100_0000_Light.jpg", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => 4,
            'sex' => 1
        ],
        [
            'name' => "グッチジャケット",
            'species' => "ジャケット", // chủng loại 
            'img_url'=> "https://media.gucci.com/style/White_South_0_160_316x316/1632245403/663753_XAAC0_9118_002_100_0000_Light.jpg", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "3000", // giá cả
            'style' => 0,
            'sex' => 1
        ],
        [
            'name' => "ナイキスポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/166b61f1-cb3e-4638-ad84-849f7bc10ce3/sportswear-essentials-plush-hoodie-kxg2Vc.png", // link ảnh
            'description' => "ナイキ",
            'sold'=> "200", // số lượng đã bán
            'price' => "200", // giá cả
            'style' => 0,
            'sex' => 2
        ],
        [
            'name' => "ナイキジャケット",
            'species' => "ジャケット", // chủng loại 
            'img_url'=> "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e84fd6be-7b3d-44bc-9a1f-47793611639a/esc-shirt-jacket-wSh6Wn.png", // link ảnh
            'description' => "ナイキ",
            'sold'=> "200", // số lượng đã bán
            'price' => "500", // giá cả
            'style' => 2,
            'sex' => 2
        ],
        [
            'name' => "ナイキパンツ",
            'species' => "パンツ", // chủng loại 
            'img_url'=> "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/97254032-0318-47bf-90b6-73c706cedb78/jordan-essentials-fleece-trousers-mm0g65.png", // link ảnh
            'description' => "ナイキ",
            'sold'=> "200", // số lượng đã bán
            'price' => "100", // giá cả
            'style' => 0,
            'sex' => 2
        ],
        [
            'name' => "ナイキジャケット",
            'species' => "ジャケット", // chủng loại 
            'img_url'=> "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/83c928bd-055b-446d-80e1-5927e6e88614/brooklyn-nets-showtime-city-edition-dri-fit-nba-long-sleeve-jacket-W8JJ2Q.png", // link ảnh
            'description' => "ナイキ",
            'sold'=> "200", // số lượng đã bán
            'price' => "200", // giá cả
            'style' => 1,
            'sex' => 1
        ],
        [
            'name' => "ナイキジャケット",
            'species' => "ジャケット", // chủng loại 
            'img_url'=> "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/7d543e4f-6e4c-489d-a4bf-cb7f0d2d3d94/air-poly-knit-jacket-6fCCk6.png", // link ảnh
            'description' => "ナイキ",
            'sold'=> "200", // số lượng đã bán
            'price' => "100", // giá cả
            'style' => 3,
            'sex' => 1
        ],
        [
            'name' => "アディダスウェア",
            'species' => "ウェア", // chủng loại 
            'img_url'=> "https://assets.adidas.com/images/h_840,f_auto,q_auto:sensitive,fl_lossy,c_fill,g_auto/4f60b59dc26e4a14b67dad0b0060ef12_9366/Ao_khoac_the_thao_Adicolor_Classics_Primeblue_SST_Mau_xanh_da_troi_H06710_21_model.jpg", // link ảnh
            'description' => "アディダス",
            'sold'=> "200", // số lượng đã bán
            'price' => "100", // giá cả
            'style' => 0,
            'sex' => 1
        ],
        [
            'name' => "アディダスジャケット",
            'species' => "ジャケット", // chủng loại 
            'img_url'=> "https://assets.adidas.com/images/h_840,f_auto,q_auto:sensitive,fl_lossy,c_fill,g_auto/90c518d225924a3eb9acaa0100223ae9_9366/N_FAB_MID_LAYER_trang_EH3685_01_laydown.jpg", // link ảnh
            'description' => "アディダス",
            'sold'=> "200", // số lượng đã bán
            'price' => "150", // giá cả
            'style' => 0,
            'sex' => 1
        ],
        [
            'name' => "プーマスポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/7cc8841443f47088d99b0d80241a0982", // link ảnh
            'description' => "プーマ",
            'sold'=> "200", // số lượng đã bán
            'price' => "500", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "アディダススポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://assets.adidas.com/images/w_600,f_auto,q_auto/d37f4d4779544be0906aaa4500b8434e_9366/Bo_djo_the_thao_DJen_ED6215_01_laydown.jpg", // link ảnh
            'description' => "アディダス",
            'sold'=> "200", // số lượng đã bán
            'price' => "500", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ナイキスポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://img.yes24.vn/Upload/ProductImage/istyle24_Sports/1353553_L.jpg", // link ảnh
            'description' => "ナイキ",
            'sold'=> "200", // số lượng đã bán
            'price' => "1000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "チャンピオンスポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/add0abc3a7d0b3a9964b6ab49e2c4605", // link ảnh
            'description' => "チャンピオン",
            'sold'=> "200", // số lượng đã bán
            'price' => "2500", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ユニクロスポーツウェア",
            'species' => "スポーツウェア", // chủng loại 
            'img_url'=> "https://scontent.webpluscnd.net/photos-df/a-0/1912-2075675-1/bo-do-nam-uniqlo-mr18.png?atk=cb37c7391e146d0afb89176b97d5fa21", // link ảnh
            'description' => "ユニクロ",
            'sold'=> "200", // số lượng đã bán
            'price' => "1500", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "グッチスーツ",
            'species' => "スーツ", // chủng loại 
            'img_url'=> "https://cf.shopee.vn/file/84ec43ac5d0dfb5210c12e133fe5a6c8", // link ảnh
            'description' => "グッチ",
            'sold'=> "200", // số lượng đã bán
            'price' => "5000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "シャネルスーツ",
            'species' => "スーツ", // chủng loại 
            'img_url'=> "https://i-ione.vnecdn.net/2021/09/19/jennie-chanel-6-4301-1632061782.jpg", // link ảnh
            'description' => "シャネル",
            'sold'=> "200", // số lượng đã bán
            'price' => "4000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        [
            'name' => "ルイヴィトンスーツ",
            'species' => "スーツ", // chủng loại 
            'img_url'=> "https://i.pinimg.com/originals/87/f8/2a/87f82a22dd41d2f708c61c0b579d7825.png", // link ảnh
            'description' => "ルイヴィトン",
            'sold'=> "200", // số lượng đã bán
            'price' => "6000", // giá cả
            'style' => "unknown",
            'sex' => rand(0, 2)
        ],
        ]
    );
    }
    }
