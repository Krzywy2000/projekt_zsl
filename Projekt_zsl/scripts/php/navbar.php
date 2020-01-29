<?php

    if($_SESSION['access'] == 'admin')
    {
        echo '<div class="row">
        <div class="col-md-4 navibar">
            <a href="#">
            <i class="fas fa-cogs"></i>
            <p>Ustawienia</p>
            </a>
        </div>
        <div class="col-md-4 navibar">
            <a href="#">
            <i class="far fa-envelope"></i></br>
            <p>Wiadomości</p>
            </a>
        </div>
        <div class="col-md-4 navibar">
            <a href="#">
            <i class="far fa-clipboard"></i>
            <p>Oceny</p>
            </a>
        </div>
    </div>';
    }

    if($_SESSION['access'] == 'uczen')
    {
        echo '<div class="row">
        <div class="col-md-4 navibar">
            <a href="#">
            <i class="fas fa-calendar-week"></i>
            <p>Plan zajęć</p>
            </a>
        </div>
        <div class="col-md-4 navibar">
            <a href="#">
            <i class="far fa-envelope"></i></br>
            <p>Wiadomości</p>
            </a>
        </div>
        <div class="col-md-4 navibar">
            <a href="#">
            <i class="far fa-clipboard"></i>
            <p>Oceny</p>
            </a>
        </div>
    </div>';
    }