all: clean build
build:
	mkdir build
	./scripts/build.sh
clean:
	rm -rf build
