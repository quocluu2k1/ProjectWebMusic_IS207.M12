

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Web Music</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='/js/script.js'></script>
    <link rel="stylesheet" href="/css/HomeStyle.css">
    <link rel="stylesheet" href="/css/IndividualStyle.css">
    <link rel="stylesheet" href="/css/GenreStyle.css">
    <link rel="stylesheet" href="/css/ChartStyle.css">
    <link rel="stylesheet" href="/css/SearchResultStyle.css">
    <link rel="stylesheet" href="/css/SingerDetailStyle.css">
    <link rel="stylesheet" href="/css/SongDetailStyle.css">
    <link rel="stylesheet" href="/css/PlaylistDetailStyle.css">
    <script src='/js/HomeScript.js'></script>
    <script src='/js/SearchScript.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

    <!-- ---------------- -->
    <aside class="sidebar">
        <div class="logo">
            <div class="brand">
                <button class="logo-btn">
                    <div class="logo-img">
                        <img class="logo-img1" src="Logo34.png" alt="Logo-Music">
                    </div>
                </button>
            </div>
        </div>
        <nav class="navbar">
            <ul class="menu" id="menu">
                <li class="is-active" id="home">
                    <a href="/">
                        <i class="bi bi-house-door-fill"></i>
                        <span>Trang Ch???</span>
                    </a>
                </li>
                <li id="mymusic">
                    <a>
                        <i class="bi bi-person-lines-fill"></i>
                        <span>C?? Nh??n</span>
                    </a>
                </li>
                <li id="genre">
                    <a>
                        <i class="bi bi-grid"></i>
                        <span>Th??? Lo???i</span>
                    </a>
                </li>
                <li id="rank">
                    <a>
                        <i class="bi bi-bar-chart"></i>
                        <span>BXH</span>
                    </a>
                </li>
            </ul>
        </nav>
        <hr class="divide-navbar">
        <div class="createplaylist">
            <button class="createplaylist-btn">
                <i class="bi bi-plus-circle"></i>
                <span>T???o Playlist M???i</span>
            </button>
        </div>
    </aside>

    <!-- ---------------- -->
    <div class="header">
        <form class="formsearch">
            <div class="search-input">
                <input type="text" name="keyword" placeholder="Nh???p t??n b??i h??t, ca s?? ho???c album..." class="search-input-text" id="search-input-text" value>
            </div>           
            <button class="search-btn" type="submit" id="search-btn">
                <i class="bi bi-search"></i>
                <span>T??m Ki???m</span>
            </button>
        </form>
        <div class="admin">
            <button class="admin-btn">
                <i class="bi bi-person-rolodex"></i>
                <span>Qu???n Tr???</span>
            </button>
        </div>
        <div class="userprofile">
            <div class="userprofile-item">
                <div class="userprofile-thumbnail">
                    <img src="{{$user->avatar}}" alt="avatar-user" class="userprofile-avatar">
                </div>
                <div class="userprofile-info">
                    <h3 class="userprofile-name">{{$user->name}}</h3>
                </div>
                <i class="bi bi-caret-down-fill expand-user"></i>
            </div>
            <div class="user_control"></div>
            <div class="dropdown-options">
                <a>Trang c?? nh??n</a>
                <a href="">T??i kho???n</a>
                <a href="{{ route('logout') }}">????ng xu???t</a>
            </div>
        </div>
    </div>
    
    <!-- ---------------- -->
    <div style="text-align: center;" class="content" id="content">

        <h1>Trang Ch???</h1>
        <hr>
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="carousel/1.jpg" alt=""></div>
            <div class="item"><img src="carousel/2.jpg" alt=""></div>
            <div class="item"><img src="carousel/3.jpg" alt=""></div>
            <div class="item"><img src="carousel/4.jpg" alt=""></div>
        </div>
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                dots: true,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            })
            
        </script>
        <div class="new-song">
            <h2>B??i H??t M???i Nh???t</h2>
            <div class="list-song">
                @foreach($newestSong as $song)
                <div class="song">
                    <button>                        
                        <img src="{{$song->sphoto}}" alt="song-img">
                    </button>
                    <div class="song-info">
                        <a href="" class="song-name">{{$song->sname}}</a>
                        <a href="" class="singer-name">{{$song->siname}}</a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="famous-song">
            <h2>Nh???ng B??i H??t ???????c Nghe Nhi???u Nh???t</h2>
            <div class="list-song">
                @foreach($top5Song as $song)
                <div class="song">
                    <button>                        
                        <img src="{{$song->sphoto}}" alt="song-img">
                    </button>
                    <div class="song-info">
                        <a href="" class="song-name">{{$song->sname}}</a>
                        <a href="" class="singer-name">{{$song->siname}}</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="featured-singer">
            <h2>Ca S?? N???i B???t</h2>
            <div class="list-singer">
                @foreach($featuredSinger as $singer)
                <div class="singer">
                    <img src="{{$singer->siphoto}}" alt="">
                    <a href="">{{$singer->siname}}</a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="news">
            <h2>Tin T???c ??m Nh???c</h2>
            <div class="content-news">
                <img src="img-news/news.jpg" alt="">
                <p>Nh???c s?? ng?????i M??ng C??? gi??nh gi???i ?????c bi???t cu???c thi 'H??t l??n Vi???t Nam': T??c ph???m 'M???i b???n t???i th??m ch???n n??y, Vi???t Nam lu??n ????n ch??o' c???a nh???c s??, nh?? so???n nh???c ng?????i M??ng C??? Ariunbold Dashdorj khi???n nhi???u ng?????i Vi???t Nam ph???i x??c ?????ng.</p>
            </div>
            <div class="content-news">
                <img src="img-news/news2.jpg" alt="">
                <p>M??? T??m ???ch??i l???n??? v???i chu???i ????m nh???c tr???c tuy???n: M??? T??m ch??nh th???c c??ng b??? chu???i ????m nh???c tr???c tuy???n ???My Soul 1981??? v???i ??a d???ng s???c m??u ??m nh???c kh??c nhau sau khi ph???i ho??n liveshow Tri ??m ??? H?? N???i v?? d???ch Covid-19. Sau h??n 20 n??m ho???t ?????ng ??m nh???c, M??? T??m v???n gi??? ???????c s???c n??ng t??? kh??n gi??? v?? gi???i showbiz Vi???t. ????y l?? l???n ?????u ti??n n??? ca s?? t??? ch???c m???t chu???i ????m nh???c tr???c tuy???n sau khi t??? ch???c ???????c liveshow k??? ni???m Tri ??m t???i TP.HCM nh??ng ph???i ho??n l???i liveshow t???i H?? N???i v?? d???ch Covid-19 di???n bi???n ph???c t???p. Chu???i ????m nh???c Acoustic & Lofi - Chill tr???c tuy???n mang t??n ???My Soul 1981??? Unstaged Live Music l?? n??i n??? ca s?? g???p g???, h??t v?? "chill" c??ng kh??n gi??? trong 6 ????m nh???c ?????c bi???t v???i nhi???u cung b???c c???m x??c v?? m??u s???c ri??ng bi???t. M??? T??m s??? th??? hi???n nh???ng ca kh??c ????nh ????m tr?????c ????y cho ?????n nh???ng ca kh??c sau n??y, m???i ????m nh???c c?? s??? tr??nh di???n m???t ca kh??c m???i.</p>
            </div>
        </div>
        

        
        <!-- <div class="singer-detail">
            <div class="info-singer">
                <div>
                    <img src="img-singer/SonTung.jpg" alt="img-singer">
                    <h1>S??n T??ng M-TP</h1>
                </div>
                <p>M-TP t??n th???t l?? Nguy???n Thanh T??ng. C???u thanh ni??n sinh n??m 1994 ??? Th??i B??nh s???m b??? hip hop h???p h???n gi???ng nh?? bao b???n b?? ?????ng trang l???a. C?? ch???t gi???ng cao luy???n l??y c??ng nh???ng b???n hit R&amp;B hay Dance Pop, S??n T??ng M-TP l?? ca s?? r???t th??nh c??ng, kh??ng ch??? n???i ti???ng ??? Vi???t Nam m?? c??n ???????c kh??n gi??? y??u nh???c Vi???t tr??n th??? gi???i bi???t ?????n.</p>
            </div>
            <div class="listsong-singer">
                <div>
                    <button>
                        <img src="img-song/ChungTaCuaHienTai-SonTung.jpg" alt="img-song">
                    </button>
                    <a href="">Ch??ng Ta C???a Hi???n T???i</a>
                </div>
                <div>
                    <button>
                        <img src="img-song/ChungTaCuaHienTai-SonTung.jpg" alt="img-song">
                    </button>
                    <a href="">Ch??ng Ta C???a Hi???n T???i</a>
                </div>
                <div>
                    <button>
                        <img src="img-song/ChungTaCuaHienTai-SonTung.jpg" alt="img-song">
                    </button>
                    <a href="">Ch??ng Ta C???a Hi???n T???i</a>
                </div>
                
            </div>
        </div> -->


        <!-- <div class="song-detail">
            <div>
                <img src="img-song/ChungTaCuaHienTai-SonTung.jpg" alt="img-song">
                <button>
                    <i class="bi bi-play-fill"></i>
                </button>
            </div>
            <div class="song-info">
                <h1 style="color: rgb(0, 132, 255);">Ch??ng Ta C???a Hi???n T???i</h1>
                <h2>Ca s??: S??n T??ng M-TP</h2>
                <h2>Th??? lo???i: Nh???c Tr???</h2>
                <h3>S??? l?????t nghe: 273590</h3>
            </div>
        </div> -->


        <!-- <div class="playlist-detail">
            <div class="playlist-info">
                <img src="img-playlist/playlist1.jpg" alt="">
                <h2>Nh???c Chill Cu???i Tu???n</h2>
            </div>
            <div class="list-song">
                <div class="song">
                    <div class="info">
                        <button class="play-song">
                            <img src="img-song/ChungTaCuaHienTai-SonTung.jpg" alt="img-song">
                        </button>
                        <div>
                            <a href="" class="song-name">Ch??ng Ta C???a Hi???n T???i</a>
                            <a href="" class="singer-name">S??n T??ng M-TP</a>
                        </div>
                    </div>
                </div>
                <div class="song">
                    <div class="info">
                        <button class="play-song">
                            <img src="img-song/ChungTaCuaHienTai-SonTung.jpg" alt="img-song">
                        </button>
                        <div>
                            <a href="" class="song-name">Ch??ng Ta C???a Hi???n T???i</a>
                            <a href="" class="singer-name">S??n T??ng M-TP</a>
                        </div>
                    </div>
                </div> 
                <div class="song">
                    <div class="info">
                        <button class="play-song">
                            <img src="img-song/ChungTaCuaHienTai-SonTung.jpg" alt="img-song">
                        </button>
                        <div>
                            <a href="" class="song-name">Ch??ng Ta C???a Hi???n T???i</a>
                            <a href="" class="singer-name">S??n T??ng M-TP</a>
                        </div>
                    </div>
                </div> 
                <div class="song">
                    <div class="info">
                        <button class="play-song">
                            <img src="img-song/ChungTaCuaHienTai-SonTung.jpg" alt="img-song">
                        </button>
                        <div>
                            <a href="" class="song-name">Ch??ng Ta C???a Hi???n T???i</a>
                            <a href="" class="singer-name">S??n T??ng M-TP</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div> -->



        
    </div>
    <div class="show-lyrics" id="show-lyrics">
        <div class="lyric-content">
            <p style="color: red;">L???i b??i h??t</p>
            @foreach($songDefault as $song)
            <div id="lyrics-song">{{$song->lyrics}}</div>
            @endforeach
            <!-- <p>Th????ng th?? th????ng th??? th??i</p>
            <p>Bi???t bao ????m d??i l??ng anh ng??ng ch??ng</p> 
            <p>??? n??i, ph??a xa xa ?????i d????ng</p> 
            <p>Tr??i ?????t v???n xoay, v???n xoay tr??n hai ng?????i y??u nhau</p> 
            <p>Ch??? mong ?????n m???t ng??y thu???c v??? nhau</p> 
            <p>Anh v???n ?????ng ????y b??n khung c???a s???</p> 
            <p>Anh v???n ?????ng ????y ch??? n???ng l??n</p> 
            <p>C??n em gi??? ??ang n??i ????u</p> 
            <p>C?? th???y th???y ch??ng m??a n???ng ???? gh?? vai g???y</p> 
            <p>Ng?????i y??u h???i anh nh??? ti???ng em ?? ??i</p>
            <p>Gi?? v???n h??t th??nh l???i</p>
            <p>M???c k??? m??y, m??y bay v??? tr???i</p>
            <p>??? n??i ???y, gi?? lay bu???n bi???t bao nhi??u</p>
            <p>Nh???ng n???i nh??? m???t th???i</p>
            <p>Ng?????i ??i xa b??n hi??n sao kh??ng v??? ????y?</p>
            <p>Ng?????i y??u h???i! H??y quay v??? v???i anh</p>
            <p>Bao ng??y anh ng??ng tr??ng</p>
            <p>???? bao ????m r???i anh v???n ng??ng tr??ng</p>
            <p>??? n??i ???y ph??a xa xa tr??ng m??y</p>
            <p>Bao l???i anh h??t l??n</p>
            <p>Tr??i tim anh d??nh trao ?????n em</p>
            <p>Ng?????i y??u h???i! Anh y??u ri??ng m??nh em th??i</p>
            <p>Gi?? v???n h??t th??nh l???i</p>
            <p>M???c k??? m??y, m??y bay v??? tr???i</p>
            <p>??? n??i ???y, gi?? lay bu???n bi???t bao nhi??u</p>
            <p>Nh???ng n???i nh??? m???t th???i</p>
            <p>Ng?????i ??i ??i xa b??n hi??n sao kh??ng v??? ????y?</p>
            <p>Ng?????i y??u h???i! H??y quay v??? v???i anh</p>
            <p>Ta-da-da-da hah-hah-hahh</p>
            <p>T??nh y??u ??y anh v???n ch??? d??nh trao</p>
            <p>Ri??ng em m?? th??i</p>
            <p>D?? ng??y mai b??o gi??ng ng???p tr???i</p>
            <p>Th?? t??nh anh trao em m??i m??i</p>
            <p>Ng?????i y??u h???i! Anh ch??? y??u ri??ng m??nh em th??i</p>
            <p>Gi?? v???n h??t th??nh l???i</p>
            <p>M???c k??? m??y, m??y m??y bay v??? tr???i</p>
            <p>??? n??i ???y, gi?? lay bu???n bi???t bao nhi??u</p>
            <p>Nh???ng n???i nh??? m???t th???i</p>
            <p>Ng?????i ??i xa b??n hi??n sao kh??ng v??? ????y?</p>
            <p>Ng?????i y??u h??i! H??y quay v??? v???i anh</p>
            <p>Ng?????i y??u h???i! H??y quay v??? v???i anh</p>    -->
        </div>
        
    </div>
    <div class="model-create-playlist">
        
    </div>
    
    <div id="modal-add_to_playlist" class="modal-add_to_playlist">

        <!-- Modal content -->
        <div class="modal-addplaylist-content">
          <span class="close-addplaylist" id="close-addplaylist">&times;</span>
          <p class="text">Th??m v??o playlist</p>
          <button class="createplaylist_other">
              <i class="bi bi-plus-circle"></i>
              <span>T???o playlist m???i</span>
          </button>
          <div class="playlist-content">
            <ul class="menu-playlist" id="menu-playlist">
                @foreach($playlists as $playlist)
                <li>
                    <button value="1">
                        <i class="bi bi-music-note-list"></i>
                        <span>{{$playlist->pname}}</span>
                    </button>
                </li>
                @endforeach
            </ul>
          </div>         
        </div>
      
      </div>

      <div id="model-comment-song" class="model-comment-song">
        <div class="modal-comment-content">
            <span class="close-comment" id="close-comment">&times;</span>
            <p class="title">B??nh Lu???n</p>
            <hr>
            <div class="number_of_comments" id="number_of_comments">2 B??nh lu???n</div>
            <div class="comment-content" id="comment-content">
                <div class="comment_of_song">
                    <img src="Avatar-Default.jpg" alt="user-image" class="avatar-user-comment">
                    <div>
                        <span class="username-comment">Nguy???n V??n A</span>
                        <div class="content-user-comment">B??i h??t hay qu??!!!</div>
                    </div>               
                </div>
                <div class="comment_of_song">
                    <img src="Avatar-Default.jpg" alt="user-image" class="avatar-user-comment">
                    <div>
                        <span class="username-comment">Nguy???n V??n B</span>
                        <div class="content-user-comment">B??i h??t x???ng ????ng ???????c top1 bxh :)))</div>
                    </div>               
                </div>
            </div>
            <div class="form-comment">
                <input type="text" placeholder="Nh???p b??nh lu???n..." class="input-comment" id="input-comment">
                <button class="submit-comment" id="submit-comment">X??c Nh???n</button>
            </div>
        </div>
      </div>
    <!-- ---------------- -->
    <div class="player-controls">
        <div class="media">
            @foreach($songDefault as $song)
            <div class="media-left">
                <a href="">
                    <img src="{{$song->sphoto}}" alt="" class="baihat-img active-CD" id="CD-Song">
                </a>               
            </div>
            <div class="media-content" id="media-content">        
                <a href=""><h3 class="song-info">{{$song->sname}}</h3></a>
                <a href=""><span class="singer-info">{{$song->siname}}</span></a>
            </div>
            @endforeach 
            <div class="media-right">
                <button class="favorite-song" id="favorite-song">
                    <i class="bi bi-heart" id="favorite-song-i"></i>
                </button>
                <div class="tooltip-favorite">Y??u th??ch</div>
                <button class="comment-song" id="comment-song">
                    <i class="bi bi-chat-dots" id="comment-song-i"></i>
                </button>
                <span class="tooltip-comment">B??nh lu???n</span>
                <button class="addtoplaylist-btn" id="addtoplaylist-btn">
                    <i class="bi bi-plus-circle"></i>
                </button>
                <span class="tooltiptext">Th??m v??o playlist</span>
            </div>
        </div>
        <div class="controlbar-flashplayer">
            <div class="actions">
                <button class="shuffle-btn" id="shuffle-btn">
                    <i class="bi bi-shuffle" id="shuffle-i"></i>
                </button>
                <button class="pre-btn" id="pre-btn">
                    <i class="bi bi-skip-start-fill"></i>
                </button>
                <button class="play-btn">
                    <i class="bi bi-play-circle" id="playmusic-btn"></i>
                </button>
                <button class="next-btn" id="next-btn">
                    <i class="bi bi-skip-end-fill"></i>
                </button>
                <button class="repeat-btn" id="repeat-btn">
                    <i class="bi bi-arrow-repeat" id="repeat-i"></i>
                </button>
            </div>
            <div class="music-time">
                <span class="current-time" id="current-time">00:00</span>
                <input type="range" value="0" class="time-sliderbar" id="time-sliderbar" min="0" max="1000">                
                <span class="song-time" id="song-time">04:23</span>
            </div>
        </div>
        <div class="controlbar-musicinfo">
            <button class="showlyric-btn" id="showlyric-btn">
                <svg style="fill: #dadada" xmlns="" width="22" height="22" viewBox="0 0 24 24" id="show-lyrics-svg">
                    <path d="M15.526 11.409c-1.052.842-7.941 6.358-9.536 7.636l-2.697-2.697 7.668-9.504 4.565 4.565zm5.309-9.867c-2.055-2.055-5.388-2.055-7.443 0-1.355 1.356-1.47 2.842-1.536 3.369l5.61 5.61c.484-.054 2.002-.169 3.369-1.536 2.056-2.055 2.056-5.388 0-7.443zm-9.834 17.94c-2.292 0-3.339 1.427-4.816 2.355-1.046.656-2.036.323-2.512-.266-.173-.211-.667-.971.174-1.842l-.125-.125-1.126-1.091c-1.372 1.416-1.129 3.108-.279 4.157.975 1.204 2.936 1.812 4.795.645 1.585-.995 2.287-2.088 3.889-2.088 1.036 0 1.98.464 3.485 2.773l1.461-.952c-1.393-2.14-2.768-3.566-4.946-3.566z"/>
                </svg>
            </button>
            <div class="player-volume">
                <button class="volume-btn">
                    <i class="bi bi-volume-up" id="volume-btn"></i>
                </button>
                <input type="range" value="70" class="volume-sliderbar" min="0" max="100" id="volume-sliderbar"> 
            </div>
            <div class="divide"><i class="bi bi-grip-horizontal icon-90deg" style="font-size:2.5em"></i></div>
                        
            <button class="expand_playlists-btn" id="expand_playlists-btn">
                <i class="bi bi-music-note-list" id="expand_playlists-i"></i>
            </button>

            <!-- div show playlist details -->
            <div class="show-playlist" id="show-playlist">
                <div class="title">
                    <span>Danh s??ch ph??t</span>
                </div> 
                <div class="list_of_song" id="list_of_song">
                    <!-- <div class="song_of_playlist">
                        <button class="playsong-playlist">
                            <img src="EmLaConThuyenCoDon-ImgSong.jpg" alt="baihat">
                        </button>
                        <div class="info_song-playlist">
                            <span class="song-name-playlist">Em L?? Con Thuy???n C?? ????n</span>
                            <span class="singer-name-playlist">Th??i H???c</span>
                        </div>
                    </div>
                    <div class="song_of_playlist active-song_of_playlist">
                        <button class="playsong-playlist">
                            <img src="GioVanHat-imgSong.jpg" alt="baihat">
                        </button>
                        <div class="info_song-playlist">
                            <span class="song-name-playlist">Gi?? V???n H??t</span>
                            <span class="singer-name-playlist">H????ng Ly</span>
                        </div>
                    </div> -->
                    
                </div>                               
            </div>
        </div>
    </div> 
    @foreach($songDefault as $song)
    <div id="song-default" hidden>{{$song->url}}</div>
    @endforeach
    <div class="notify hide-notify" id="notify">
        <i class="bi bi-check-circle"></i>
        <p class="message-content">Th??m v??o playlist th??nh c??ng</p>
        <span class="close-notify" id="close-notify">&times;</span>
    </div>
</body>
</html>
