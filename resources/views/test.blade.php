<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div x-data="test">
        <button @click="array.push({})">Button</button>
        <template x-for="(a, i) in array">
            <div x-text="i"></div>
        </template>
    </div>
</body>
<script>
    function test() {
        return {
            array: []
        }
    }
</script>
<script src="{{ asset('js/app.js') }}"></script>


</html>
