module.exports = function () {

    var source = 'src',
        development = 'dist',
        test = 'test',
        remove = ['.sass-cache', 'dist'],

        // 템플릿 경로
        template = {
            root: source + '/',
            src: source + '/**/!(_)*.html',
            parts: source + '/**/_*.html',
            dest: development + '/',
            // src  : source + '/views/www/**/!(_)*.html',
            // parts: source + '/views/www/**/_*.html',
            // dest : development + '/views/www',
            // dest_parts: development + '/views/www/**/include',
            // src_m  : source + '/views/m/**/!(_)*.html',
            // parts_m : source + '/views/m/**/_*.html',
            // dest_m : development + '/views/m',
            // dest_m_parts: development + '/views/m/**/include',
        },

        // Sass 경로
        sass = {
            src: source + '/assets/sass/**/*.{scss,sass}',
            src_sprite: source + '/assets/sass/sprite',
            dest: development + '/static/css'
            // src : source + '/sass/**/!(_)*.{scss,sass}',
            // parts : source + '/sass/**/_*.{scss,sass}',
        },

        // Css 경로
        css = {
            src: source + '/assets/css/**/*.css',
            dest: development + '/static/css'
        },

        // JS 경로
        js = {
            src: source + '/assets/js/**/*.js',
            dest: development + '/static/js'
        },

        // Img 경로
        img = {
            // src : source + '/assets/img/**/*.{gif,jpg,png,ico}',
            src: source + '/assets/img/**/!(sprite)*/*',
            src_sprite: source + '/assets/img/**/sprite*/*',
            dest: development + '/img',
        },

        // etc 경로
        etc = {
            src: source + '/assets/!(css|sass|js|img)/**',
            dest: development + '/static/',
        },

        // HTML 옵션
        htmlbeautify = {
            "indentSize": 4
        };

    return {
        del: remove,
        src: source,
        test: test,
        dev: development,

        template: template,
        css: css,
        sass: sass,
        js: js,
        img: img,
        etc: etc,

        htmlbeautify: htmlbeautify
    };
};