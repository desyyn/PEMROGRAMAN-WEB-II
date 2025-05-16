<div class="profil-container">
    <div class="profile-left">
        <img src="/images/foto.jpg" alt="Foto Profil" class="profile-img">
        <h2 class="shortname">ﾟꔫ---dessy!</h2>
    </div>

    <div class="profile-middle">
        <div class="about-box">
            <div class="about-title">about me...</div>
            <div class="about-content">
                <p>
                    Namaku <?= esc($nama) ?> dengan NIM <?= esc($nim) ?> dari prodi <?= esc($asal_prodi) ?>.
                    Aku punya skill seperti <?= esc(implode(', ', $skill)) ?> (tapi belum jago :'D').
                </p>

            </div>
        </div>
        <p class="hobi-text">
            hobbies: <?= strtolower(implode(', ', $hobi)) ?> :&gt; <br><br>
            comfort songs: <?= strtolower(implode(', ', $comfort_song)) ?>
        </p>
    </div>

    <div class="profile-right">
        <p class="comfort-food">
            comfort foods: <?= implode(', ', $comfort_food) ?> :]
        </p>
        <img src="/images/landscape.jpg" alt="Landscape" class="landscape-img">
    </div>
</div>