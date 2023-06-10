<x-app-layout>
    <script src="https://threejs.org/build/three.js"></script>
    <script src="https://threejs.org/examples/js/loaders/GLTFLoader.js"></script>

    <div id="canvas-container"></div>

    <script>
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        var renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.getElementById('canvas-container').appendChild(renderer.domElement);

        var loader = new THREE.GLTFLoader();
        loader.load('/ruta/al/modelo.glb', function(gltf) {
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
