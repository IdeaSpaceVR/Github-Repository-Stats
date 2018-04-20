@if ($number_elements == 2)

<a-entity position="0 -1.5 0">
		<a-triangle 
				isvr-menu-block-nav-back 
				position="-0.6 0 0" 
				rotation="0 0 90" 
				mixin="menu-block-nav-inactive" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
		<a-circle 
				isvr-menu-block-nav="#menu-block-0" 
				position="-0.2 0 0" 
				mixin="menu-block-nav-active" 
				radius="0.1">
		</a-circle>
		<a-circle 
				isvr-menu-block-nav="#menu-block-1" 
				position="0.2 0 0" 
				mixin="menu-block-nav-active" 
				radius="0.1">
		</a-circle>
		<a-triangle 
				isvr-menu-block-nav-fwd 
				position="0.6 0 0" 
				rotation="0 0 -90" 
				mixin="menu-block-nav-active" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
</a-entity>

@elseif ($number_elements == 3)

<a-entity position="0 -1.5 0">
		<a-triangle 
				isvr-menu-block-nav-back 
				position="-0.8 0 0" 
				rotation="0 0 90" 
				mixin="menu-block-nav-inactive" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
		<a-circle 
				isvr-menu-block-nav="#menu-block-0" 
				position="-0.4 0 0" 
				mixin="menu-block-nav-active" 
				radius="0.1">
		</a-circle>
		<a-circle 
				isvr-menu-block-nav="#menu-block-1" 
				position="0 0 0" 
				mixin="menu-block-nav-active" 
				radius="0.1">
		</a-circle>
		<a-circle 
				isvr-menu-block-nav="#menu-block-2" 
				position="0.4 0 0" 
				mixin="menu-block-nav-active" 
				radius="0.1">
		</a-circle>
		<a-triangle 
				isvr-menu-block-nav-fwd 
				position="0.8 0 0" 
				rotation="0 0 -90" 
				mixin="menu-block-nav-active" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
</a-entity>

@elseif ($number_elements == 4)

<a-entity position="0 -1.5 0">
		<a-triangle 
				isvr-menu-block-nav-back 
				position="-1.0 0 0" 
				rotation="0 0 90" 
				mixin="menu-block-nav-inactive" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
		<a-circle 
				isvr-menu-block-nav="#menu-block-0" 
				position="-0.6 0 0" 
				mixin="menu-block-nav-active" 
				radius="0.1">
		</a-circle>
		<a-circle 
				isvr-menu-block-nav="#menu-block-1" 
				position="-0.2 0 0" 
				mixin="menu-block-nav-active" 
				radius="0.1">
		</a-circle>
		<a-circle 
				isvr-menu-block-nav="#menu-block-2" 
				position="0.2 0 0" 
				mixin="menu-block-nav-active" 
				radius="0.1">
		</a-circle>
		<a-circle 
				isvr-menu-block-nav="#menu-block-3" 
				position="0.6 0 0" 
				mixin="menu-block-nav-active" 
				radius="0.1">
		</a-circle>
		<a-triangle 
				isvr-menu-block-nav-fwd 
				position="1.0 0 0" 
				rotation="0 0 -90" 
				mixin="menu-block-nav-active" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
</a-entity>

@endif