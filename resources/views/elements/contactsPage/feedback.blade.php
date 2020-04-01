<div>
    <hr>
    <h2>Добавте отзыв</h2>
    <form action='{{route('contacts')}}' method="post">
        @csrf
        <label for="name">Введите ваше имя<br>
            <input name="name" placeholder='Введите имя'>
        </label> <br>
        <label for="description">Напишите отзыв<br>
            <textarea name='description' placeholder='Отзыв новость'></textarea>
        </label><br>
        <p><input type='submit' value='Отправить'></p>
    </form>
</div>

