<?php
include "header.php";
?>
<div class="mosh-breadcumb-area" style="background-image: url(img/core-img/breadcumb.png);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Kumaş Kontrol Makinaları</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ürünlerimiz</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kumaş Kontrol Makinaları</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Portfolio Area Start ***** -->
<section class="mosh-portfolio-area section_padding_100_0 clearfix">
    <style>
        .single_gallery_item {
            position: relative;
            overflow: hidden;
        }

        .single_gallery_item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .single_gallery_item:hover img {
            transform: scale(1.05);
        }

        /* Overlay */
        .gallery-hover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            cursor: pointer; /* tıklanabilir overlay */
        }

        .single_gallery_item:hover .gallery-hover-overlay {
            opacity: 1;
        }

        .port-hover-text {
            color: #fff;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            padding-top: 80px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
            animation: fadeIn 0.5s;
        }

        .modal-content {
            margin: auto;
            display: block;
            max-width: 80%;
            border-radius: 10px;
            animation: zoomIn 0.5s;
        }

        #caption {
            text-align: center;
            color: #fff;
            margin-top: 15px;
        }

        .close {
            position: absolute;
            top: 30px;
            right: 45px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.7);
            }
            to {
                transform: scale(1);
            }
        }
    </style>

    <div class="mosh-portfolio">
        <div class="single_gallery_item kumas-kontrol">
            <img src="img/products/kumas-kontrol.jpg" alt="Kumaş Kontrol Süreci">
            <div class="gallery-hover-overlay d-flex align-items-center justify-content-center" onclick="openModal(this.previousElementSibling)">
                <div class="port-hover-text text-center">
                    <h4>Kumaş Kontrol Makinaları</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="imgModal" class="modal" onclick="closeModal()">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImg">
        <div id="caption"></div>
    </div>

    <script>
        function openModal(img) {
            var modal = document.getElementById("imgModal");
            var modalImg = document.getElementById("modalImg");
            var captionText = document.getElementById("caption");
            modal.style.display = "block";
            modalImg.src = img.src;
            captionText.innerHTML = img.alt;
        }

        function closeModal() {
            document.getElementById("imgModal").style.display = "none";
        }
    </script>
</section>

<br>
<br>
<!-- ***** CTA Area End ***** -->
<?php
include "footer.php";
?>
