module.exports = function(grunt) {

    // Configuration
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        // Minify files
        uglify: {
            build: {
                src: 'js/scripts.js',
                dest: 'js/scripts.min.js'
            }
        },
                                                                                                                                                                                                                                                                    
        // Optimize images
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'images'
                }]
            }
        },

        // Compile SASS (with Compass)
        compass: {
            dist: {
                options: {
                    sassDir: 'sass',
                    cssDir: 'css'
                }
            }
        },


        // Watch files
        watch: {
            scripts: {
                files: ['js/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false,
                },
            }, 

            css: {
                files: ['**/*.scss'],
                tasks: ['compass']
            }
        },


    });

    // Tell Grunt what plugin(s) to use
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Tell Grunt what to do when ("grunt" command)
    grunt.registerTask('default', ['uglify', 'imagemin', 'watch',]);

};