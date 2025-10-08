@extends('layouts.home')

@section('content')

<div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 20px;">
    <div style="width: 90%; max-width: 1000px; height: 70vh; border: 1px solid #eee; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden;">
        <iframe
            src="https://www.myparcelasia.com/"
            style="width: 100%; height: 100%; border: none;"
            title="MyParcelAsia"
            loading="lazy"
            allowfullscreen>
        </iframe>
    </div>
</div>

@endsection
