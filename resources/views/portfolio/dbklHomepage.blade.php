@extends('layouts.home')

@section('content')

<div style="display: flex; justify-content: center; align-items: flex-start; min-height: 100vh; padding: 80px 24px 24px 24px;">
    <!-- Sidebar Card -->
    <div style="position: sticky; top: 100px; align-self: flex-start; min-width: 210px; max-width: 220px; margin-right: 32px; z-index: 2;">
        <div style="background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.07); padding: 16px;">
            <h5 style="margin-bottom:18px; font-size:1.15rem; font-weight:600; color:#333;">Pages</h5>
            <div>
                <button
                    id="homepageTab"
                    type="button"
                    class="dbkl-nav-btn active"
                    style="display:block; width:100%; padding:10px 12px; margin-bottom:6px; background: #e0f7fa; border:none; border-radius:5px; font-weight:500; color:#18425d; text-align:left; outline:none; cursor:pointer; transition:background 0.18s;"
                    onclick="showDbklPage('homepage')"
                >
                    Homepage
                </button>
                <button
                    id="regTab"
                    type="button"
                    class="dbkl-nav-btn"
                    style="display:block; width:100%; padding:10px 12px; background: #f5f5f5; border:none; border-radius:5px; font-weight:500; color:#18425d; text-align:left; outline:none; cursor:pointer; transition:background 0.18s;"
                    onclick="showDbklPage('registration')"
                >
                    Registration Page
                </button>
            </div>
        </div>
    </div>

    <!-- Right Main Card -->
    <div style="flex:1; max-width:900px;">
        <div id="dbkl-homepage" style="display:block;">
            <div style="background:#fff; border-radius:10px; box-shadow:0 4px 12px rgba(22,49,85,0.07); overflow:hidden; border:1px solid #eee;">
                <img src="{{ asset('assets/imgs/dbklhomepagescreen.png') }}" alt="DBKL Homepage Screenshot" style="display: block; width: 100%; height: auto;">
            </div>
        </div>
        <div id="dbkl-registration" style="display:none;">
            <div style="background:#fff; border-radius:10px; box-shadow:0 4px 12px rgba(22,49,85,0.07); overflow:hidden; border:1px solid #eee;">
                <img src="{{ asset('assets/imgs/registerdbkl.png') }}" alt="DBKL Registration Page Screenshot" style="display: block; width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>

<script>
    function showDbklPage(page) {
        const homepageDiv = document.getElementById('dbkl-homepage');
        const regDiv = document.getElementById('dbkl-registration');
        const homepageTab = document.getElementById('homepageTab');
        const regTab = document.getElementById('regTab');

        if (page === 'homepage') {
            homepageDiv.style.display = "block";
            regDiv.style.display = "none";
            homepageTab.classList.add('active');
            homepageTab.style.background="#e0f7fa";
            regTab.classList.remove('active');
            regTab.style.background="#f5f5f5";
        } else if (page === 'registration') {
            homepageDiv.style.display = "none";
            regDiv.style.display = "block";
            homepageTab.classList.remove('active');
            homepageTab.style.background="#f5f5f5";
            regTab.classList.add('active');
            regTab.style.background="#e0f7fa";
        }
    }
</script>


@endsection
