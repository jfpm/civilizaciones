<x-app-layout>
    
    

    <div id="canvas-container"></div>

    <script>
        
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        var renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.getElementById('canvas-container').appendChild(renderer.domElement);

        var loader = new THREE.GLTFLoader();
        loader.load('{{ asset('static/dragon_animation_flying.glb') }}', function(gltf) {
            var model = gltf.scene;
            scene.add(model);

            animate();
        });

        camera.position.z = 5;

        function animate() {
            requestAnimationFrame(animate);
            renderer.render(scene, camera);
        }

        animate();
    </script>
</x-app-layout>
