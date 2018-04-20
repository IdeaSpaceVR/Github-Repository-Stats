@extends('theme::index')

@section('title', $space_title)

@section('scene')

@php
$menu_block_margin = 10;
$menu_block_nav_inactive_color = "#999999";
$menu_block_nav_active_color = "#ffcc00";
@endphp

		<a-scene>

				<a-assets>
    				<a-mixin id="menu-block-nav-inactive" material="color: {{ $menu_block_nav_inactive_color }}"></a-mixin>
    				<a-mixin id="menu-block-nav-active" material="color: {{ $menu_block_nav_active_color }}"></a-mixin>
 				</a-assets>



    </a-scene>

		<script>
    (function() {
        /* DOM is loaded */
        isvr_repo.init('{{ trim($content['repository-info'][0]['repository-owner-name']['#value']) }}', '{{ trim($content['repository-info'][0]['repository-name']['#value']) }}');
    })();
    </script>

@endsection
