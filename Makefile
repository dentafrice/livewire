all: clean build
serve: all start_server
build:
	mkdir build
	./scripts/build.sh
clean:
	rm -rf build
start_server:
	pushd build/pages; python -m SimpleHTTPServer 8000; popd
