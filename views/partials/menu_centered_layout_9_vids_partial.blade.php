<a-entity id="{{ $id }}" position="{{ $position }}" visible="{{ $visible }}">

		@if ($count == ($start_counter + 6))

		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][$start_counter]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 1)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center, right //-->
		<a-entity
				position="1.15 0 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 2)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, center //-->
		<a-entity
				position="0 0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 3)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st bottom row, center //-->
		<a-entity
				position="0 -0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 4)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, left //-->
		<a-entity
				position="-1.15 0.65 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 5)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>

		@elseif ($count == ($start_counter + 7))

		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][$start_counter]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 1)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center, right //-->
		<a-entity
				position="1.15 0 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 2)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, center //-->
		<a-entity
				position="0 0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 3)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st bottom row, center //-->
		<a-entity
				position="0 -0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 4)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, left //-->
		<a-entity
				position="-1.15 0.65 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 5)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, right //-->
		<a-entity
				position="1.15 0.65 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 6)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>

		@elseif ($count == ($start_counter + 8))

		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][$start_counter]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 1)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center, right //-->
		<a-entity
				position="1.15 0 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 2)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, center //-->
		<a-entity
				position="0 0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 3)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st bottom row, center //-->
		<a-entity
				position="0 -0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 4)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, left //-->
		<a-entity
				position="-1.15 0.65 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 5)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, right //-->
		<a-entity
				position="1.15 0.65 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 6)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st bottom row, left //-->
		<a-entity
				position="-1.15 -0.65 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 7)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>

		@elseif ($count == ($start_counter + 9))

		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][$start_counter]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 1)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center, right //-->
		<a-entity
				position="1.15 0 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 2)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, center //-->
		<a-entity
				position="0 0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 3)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st bottom row, center //-->
		<a-entity
				position="0 -0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 4)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, left //-->
		<a-entity
				position="-1.15 0.65 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 5)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, right //-->
		<a-entity
				position="1.15 0.65 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 6)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st bottom row, left //-->
		<a-entity
				position="-1.15 -0.65 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 7)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>

		<!-- 1st bottom row, right //-->
		<a-entity
				position="1.15 -0.65 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['videos'][($start_counter + 8)]['video-thumbnail']['video-thumbnail-resized']['#uri']['#value'] }})">
		</a-entity>

		@endif

</a-entity>
