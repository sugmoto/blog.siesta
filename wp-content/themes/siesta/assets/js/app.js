$(function(){
    /*nav
    ===============================================================*/
    $('.btn-nav').on('click',function(){
        $(this).toggleClass('is-active');
        $('.navWrap').fadeToggle(250);
    });
});

/*load more
===============================================================*/
let now_post_num = 14; // 現在表示されている件数
let get_post_num = 14;  // もっと読み込むボタンで取得する件数

//archive側で設定したdata属性の値を取得
let load = $(".load");
let all_count = load.data("count"); //カスタム投稿の全件数

//admin_ajaxにadmin-ajax.phpの絶対パス指定（相対パスは失敗する）
let host_url = location.protocol + "//" + location.host;
let admin_ajax = host_url + '/blog.siesta/wp-admin/admin-ajax.php';

$(window).on('scroll', function () {
    var docH = $(document).innerHeight(); //ページ全体の高さ
    var winH = $(window).innerHeight(); //ウィンドウの高さ
    var bottom = docH - winH; //ページ全体の高さ - ウィンドウの高さ = ページの最下部位置
    if (bottom <= $(window).scrollTop()) {
        
        //一番下までスクロールした時に実行
        $.ajax({
            type: 'POST',
            url: admin_ajax,
            data: {
                'action' : 'my_ajax_action', //functions.phpで設定する関数名
                'now_post_num': now_post_num,
                'get_post_num': get_post_num
            },
        })
        .done(function(data){
            load.append(data); 
            now_post_num = now_post_num + get_post_num; 
        })
        .fail(function(){
            alert('error');
        })

    }
});


/* swiper - single_recent
===============================================================*/
const swiper = new Swiper('.single_recent', {
    spaceBetween: 10,
    slidesPerView: 'auto'
});
  