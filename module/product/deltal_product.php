<?php

get_header();


?>


<div id="container">
    <div class="noidung">
        <div class="nd_left">
            <?php
            $id = (int)$_GET['id'];
            $info_cart =   get_product($id);
            if (!empty($info_cart)) {
                foreach ($info_cart as $item) {
                    $listimage = explode(',', $item['anhlist_sp']);
            ?>
                    <div class="nd_sanpham">
                        <div class="image_toanbo">
                            <div class="image">
                                <div class="image_chinh" id="image_hover" style="background-image: url(public/img_product/<?php echo $item['anh_sp']  ?>);  height: 300px; width: 300px;"></div>
                            </div>
                            <div class="image_list">
                                <?php
                                $listimage = explode(',', $item['anhlist_sp']);
                                foreach ($listimage as $img) {
                                ?>
                                    <button class="list1"><img class="hover_image" src="public/img_product/<?php echo $img ?>" onmouseover="hover(this);" onmouseout="unhover(this);"></button>

                                <?php
                                }

                                ?>
                            </div>
                            <div class="phancach"></div>
                            <script>
                                function hover(hover_vao) {
                                    var src = hover_vao.getAttribute("src");
                                    document.getElementById('image_hover').style.backgroundImage = "url(" + src + ")";
                                }

                                function unhover(hover_vao) {
                                    var src = hover_vao.getAttribute("src");
                                    document.getElementById('image_hover').style.backgroundImage = "url(" + src + ")";
                                }
                            </script>
                        </div>
                        <div class="tt_sanpham">
                            <p><?php echo $item['ten_sp']  ?></p>
                            <div class="thuong_hieu">Th????ng hi???u
                                <a href="#">ACER</a>
                                <span>|</span>
                                SKU: 200400304
                            </div>
                            <span class="giatien"><?php echo currency_format($item['gia_sp'])  ?></span>
                            <div class="phancach"></div>
                            <div class="dathang">
                                <strong>Ch???n th??m 1 trong nh???ng khuy???n m??i sau</strong>
                                <div class="khuyenmai">
                                    <div class="gia">
                                        <p>Gi??: <?php echo currency_format($item['giamgia_sp'])  ?></p>
                                        <span>???? gi???m th??m</span> <span class="discount">1.300.000??</span>
                                    </div>
                                    <div class="dautich">
                                        <span>???</span>
                                    </div>
                                </div>
                                <div class="btn">
                                    <button class="btn_muahang">
                                        <a href="?mod=cart&act=add&id=<?php echo $item['id_sp']  ?>"><strong>MUA NGAY</strong></a>
                                    </button>
                                    <button class="btn_themcart">
                                        <a href="?mod=cart&act=add2&id=<?php echo $item['id_sp']  ?>"><strong>TH??M V??O GI??? H??NG</strong></a>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

            <?php
                }
            }
            ?>

        </div>


        <div class="nd_right">
            <div class="noidung_right">
                <div class="header_right">
                    <span><i class="fas fa-shipping-fast"></i></span>
                    <div class="nd">S???n ph???m ???????c mi???n ph?? giao h??ng</div>
                </div>
                <div class="phancach1"></div>
                <div class="content">
                    <div class="content1">
                        <p>Ch??nh s??ch b??n h??ng</p>
                        <div class="camket">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <span>Cam k???t ch??nh h??ng 100%.</span>
                        </div>
                        <div class="ship">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <span>Mi???n ph?? giao h??ng t??? 500k.</span>
                        </div>
                        <div class="doitra">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                            <span>?????i tr??? mi???n ph?? trong 10 ng??y.</span>
                        </div>
                    </div>
                    <div class="content2">
                        <p>D???ch v??? kh??c</p>
                        <div class="setting">
                            <i class="fa fa-gear" aria-hidden="true"></i>
                            <span>S???a ch???a ?????ng gi?? 150.000??.</span>
                        </div>
                        <div class="vesinh">
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                            <span>V??? sinh m??y t??nh, laptop.</span>
                        </div>
                        <div class="baohanh">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            <span>B???o h??nh t???i nh??</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="nd_right2">
            <?php echo $item['mota_sp']  ?>
        </div>


        <div class="mota_sp">
            <div class="mota_sanpham">
                <div class="duongke2"></div>
                <span>M?? t??? s???n ph???m</span>
            </div>
            <div class="content_mota">
                <div class="nd_mota">
                    <div class="image_mota">
                        <img src="public/image/01.jpg">
                    </div>
                    <div class="text_mota">
                        <span class="title_mota">M??n h??nh kh??ng gi???i h???n</span>
                        <p>
                            Laptop ASUS VivoBook 15 A512FA-EJ1281T v???i ng??n ng??? thi???t k??? NanoEdge tr??n c??? 4 c???nh ??em l???i m???t m??n h??nh g???n nh?? kh??ng vi???n, gi??p t??ng di???n t??ch m??n h??nh hi???n th??? l???n h??n tr??n khung m??y. B???n s??? ???????c tr???i nghi???m h??nh ???nh c???c k??? s???ng ?????ng ?????n cho??ng ng???p cho c??? c??ng vi???c v?? gi???i tr??, x??a tan m???i gi???i h???n v??? n??ng l???c, kh??i ngu???n c???m h???ng cho b???n ph?? v??? nh???ng ranh gi???i m???i.
                        </p>
                    </div>
                </div>
                <div id="nd_mota_hide">
                    <div class="image_mota">
                        <img src="public/image/03.jpg">
                    </div>
                    <div class="text_mota">
                        <span class="title_mota">K??ch th?????c nh??? g???n h??n</span>
                        <p>
                            K??ch th?????c ???????c thu g???n xu???ng m???c t???i thi???u nh??? m??n h??nh NanoEdge kh??ng vi???n tr??n b???n c???nh, ASUS VivoBook 15 A512FA-EJ1281T s??? h???u m???t th??n h??nh nh??? g???n v?? thanh m???nh h??n ????ng k??? so v???i th??? h??? ti???n nhi???m tr?????c ????. Do ???? kh??ng gian b??n l??m vi???c c???a b???n s??? tr??? n??n g???n g??ng nh??? chi???c m??y t??nh chi???m ??t di???n t??ch n??y, v?? b???n c??ng c?? th??? tho???i m??i mang x??ch theo ng?????i khi x?? d???ch.
                        </p>
                    </div>
                    <div class="image_mota">
                        <img src="public/image/02.jpg">
                    </div>
                    <div class="text_mota">
                        <span class="title_mota">Tho???i m??i th??? hi???n c?? t??nh</span>
                        <p>
                            Laptop ASUS VivoBook 15 A512FA-EJ1281T ??em ?????n nhi???u phi??n b???n m??u s???c tr??? trung ???????c ho??n thi???n ????? ph?? h???p v???i phong c??ch c???a b???n nh??: m??u B???c b??ng b???y v?? tinh t???, m??u X??m tinh t??? v?? tr???m l???ng h??n. ????? kh??c bi???t h??n b???n c?? th??? ch???n xu h?????ng m???i v???i m??u Xanh l??ng c??ng c?? kh??? n??ng ?????i m??u s???c khi nh??n t??? nh???ng g??c ????? kh??c nhau. C??n n???u b???n mu???n ti??n phong v??? phong c??ch, b???n c?? th??? ch???n m??u H???ng san h?? v???i l???p ho??n thi???n t????i s??ng.
                        </p>
                    </div>
                    <button class="btn_detail_mota" id="show" onclick="btnHide(),btnShow_btn()">
                        <span>Thu g???n n???i dung</span>
        
        
                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <button class="btn_detail_mota" id="hide_show" onclick="btnShow(),btnHide_btn()">
                <span>Xem th??m n???i dung</span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>
        </div>
        <script>
            function btnShow() {
                var show = document.getElementById("nd_mota_hide");
                show.style.display = "block";
                var container = document.getElementById("container");
                container.style.height = "3400px";
            }

            function btnHide_btn() {
                var hide_btn = document.getElementById("hide_show");
                hide_btn.style.display = "none";
            }

            function btnShow_btn() {
                var hide_btn = document.getElementById("hide_show");
                hide_btn.style.display = "block";
            }

            function btnHide() {
                var show = document.getElementById("nd_mota_hide");
                show.style.display = "none";
                var container = document.getElementById("container");
                container.style.height = "2000px";
            }
        </script>


        <div class="sp_tuongtu">
            <div class="title_tuongtu">
                <div class="duongke2"></div>
                <p>S???n ph???m t????ng t???</p>
            </div>
            <div class="content_tuongtu">
                <div class="nd_tuongtu">
                    <ul>
                        <?php
                        $list_product = get_product_list();
                        if (!empty($list_product)) {
                            foreach ($list_product as $item) {
                                echo '     <li>
                                   <a href="?mod=product&act=deltal_product&id='.$item['id_sp'].'">
                                       <div class="productDetail">
                                           <div class="image_tuongtu">
                                               <img src="public/img_product/' . $item['anh_sp'] . '">
                                           </div>
                                           <div class="content_sp">
                                               <div class="product_text">
                                                   <span>' . $item['ten_sp'] . '</span>
                                               </div>
                                               <div class="product_price">
                                                   <span>' . currency_format($item['giamgia_sp']) . '</span>
                                               </div>
                                               <div class="bt_lienhe">
                                                   <button><span>LI??N H???</span></button>
                                               </div>
                                           </div>
                                       </div>
                                   </a>
                               </li>';
                            }
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
        <!-- ph???n b??nh lu???n -->
        <div class="binhluan">
            <div class="div_binhluan">
                <div class="title_comment">
                    <div class="duongke2"></div>
                    <span>B??nh lu???n</span>
                </div>
                <?php
                $DBH = new PDO('mysql:host=localhost;dbname=laptop1', 'root', '');
                $id = (int)$_GET['id'];
                if (isset($_POST['btn_comment'])) {
                    $name = $_POST['name_kh'];
                    $deltal = $_POST['noidung'];
                    $id_sp = $id;
                    $dates = date('y-m-d h:i:s');
                    $sql = "insert into comment(name_kh,noidung,id_sp,ngaybl)values('$name','$deltal',$id,'$dates')";
                    $result = $DBH->exec($sql);
                }
                ?>
                <div class="form_binhluan">
                    <form  method="post">
                        <div class="form_text">
                            <input class="form-control text_name" name="name_kh" cols="0" rows="1" placeholder="h??? t??n ng?????i b??nh lu???n">
                            <textarea class="form-control" name="noidung" cols="5" rows="5" placeholder="Xin m???i ????? l???i c??u h???i, Five Man s??? tr??? l???i trong 1h t??? 8h - 22h m???i ng??y."></textarea>
                        </div>
                        <div class="form_submit">
                            <div class="login_bl">
                                <a href="#">????ng nh???p ????? b??nh lu???n</a>
                            </div>
                            <div class="submit_bl">
                                <input type="submit" name="btn_comment" value=" g???i">

                            </div>
                        </div>
                    </form>

                </div>
                <div class="comment_wrap">
                    <ul class="listcomment">
                        <?php
                         $id = (int)$_GET['id'];
                        $list_comment = get_commen($id);
                        //show_array($list_comment);
                        if (!empty($list_comment)) {
                            foreach ($list_comment as $item) {
                        ?>
                                <li class="cmt_item">
                                    <div class="ten_kh">
                                        <div>N</div>
                                        <strong><?php echo $item ['name_kh']  ?></strong>
                                        <span>| <?php echo $item ['ngaybl']  ?></span>
                                    </div>
                                    <div class="question">
                                    <?php echo $item ['noidung']  ?>
                                    </div>
                                </li>

                        <?php
                            }
                        }
                        ?>
                     
                     
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>