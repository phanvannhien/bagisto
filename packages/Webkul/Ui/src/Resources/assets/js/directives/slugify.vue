<script>
    export default {
        bind(el, binding, vnode) {
<<<<<<< HEAD
            let handler = function(e) {
                setTimeout(function() { 
                    e.target.value = e.target.value.toString().toLowerCase()
                        .replace(/[^\w- ]+/g,'')
                        .trim()
                        .replace(/ +/g,'-');
                }, 100);
            }
=======
            let handler = function (e) {
                setTimeout(function () {
                    e.target.value = e.target.value
                        .toString()
                        .toLowerCase()
                        .replace(/[^\w- ]+/g, '')

                        // replace whitespaces with dashes
                        .replace(/ +/g, '-')

                        // avoid having multiple dashes (---- translates into -)
                        .replace('![-\s]+!u', '-')
                        .trim();
                }, 100);
            };
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719

            el.addEventListener('input', handler);
        }
    }
</script>