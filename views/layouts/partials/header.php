<header>
        <div class="container">
            <div class="header">
                <div class="header-left">
                    <a href="<?= BASE_URL ?>">
                        <img src="<?= BASE_URL ?>assets/client/images/logo.png" alt=""width="100px">
                    </a>
                </div>

                <div class="header-center">
                    <ul class="menu">
                        <li><a href="<?= BASE_URL ?>">Trang chủ</a></li>
                        <li><a href="<?= BASE_URL . '?act=shop' ?>">Sản phẩm</a></li>
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="<?= BASE_URL . '?act=news' ?>">Tin tức</a></li>
                    </ul>
                </div>

                <div class="header-right">
                    <ul class="icons">
                        <li class='search-area'>
                            <img class="search-icon" src="<?= BASE_URL ?>assets/client/images/icon-search.svg">
                            <div class="search-bar">
                                <form action="" method="GET">
                                    <input type="text" name='search-bar' placeholder="Nhập tên sản phẩm mà bạn muốn tìm kiếm,...">
                                </form>
                            </div>
                        </li>
                        <li><a href="<?= BASE_URL . '?act=cart-list' ?>"><img src="<?= BASE_URL ?>assets/client/images/icon-cart.svg"></a></li>
                        <li><a href="?act=profile"><img src="<?= BASE_URL ?>assets/client/images/icon-user.svg"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <script>
        document.querySelector('.search-icon').addEventListener('click', function() {
            var searchBar = document.querySelector('.search-bar');
            searchBar.style.display = (searchBar.style.display === 'none' || searchBar.style.display === '') ? 'block' : 'none';
        });

        document.getElementById('search-input').addEventListener('keyup', function(event) {
            if (event.keyCode === 13) { // 13 là mã phím của phím "Enter"
                performSearch();
            }
        });

        function performSearch() {
            var searchTerm = document.getElementById('search-input').value;
            // Thực hiện tìm kiếm với từ khóa searchTerm
            console.log("Tìm kiếm với từ khóa: " + searchTerm);
        }

    </script>