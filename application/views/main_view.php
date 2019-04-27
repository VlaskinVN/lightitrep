<div class="content">
    <div class="title m-b-md" style="background-color: #e6e6e6; padding: 5px">
        Light-IT
        <div class="title m-b-md" style="font-size: 18px;">
            <i class="text-secondary">Конвертация чисел арабских в римские и наоборот.</i>
            <a href="https://github.com/VlaskinVN/lightitrep">Ссылка на github</a>
            <br>
            <hr>
            <i class="text-secondary" style="font-size: 16px">Максимальное вводимое арабское число - 3999, из которого можно получить римское.</i>
            <br>
            <i class="text-secondary" style="font-size: 16px">Максимальное количество одинаковых римских знаков - 4.</i>
        </div>
    </div>

    <form action="/" method="post">
        <input type="text" name="text" class="form-control" style="width: 50%; margin-left: 25%; text-align:center" placeholder="Текстовое полу №1">
        <input type="submit" value="Send" class="btn btn-info" style="margin: 15px; width: 50%;">
        <input type="text" name="textTwo" class="form-control" style="width: 50%; margin-left: 25%;text-align:center" placeholder="Текстовое полу №2" value="<?php echo $data; ?>">
    </form>
</div>