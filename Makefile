all: clean build
serve: all start_server
build:
	mkdir build
	./scripts/build.sh
	cp -R assets build/pages/assets
clean:
	rm -rf build
deploy:
	ssh caleb.io 'cd /usr/share/nginx/www && git pull && make'
start_server:
	pushd build/pages; python -m SimpleHTTPServer 8000; popd
