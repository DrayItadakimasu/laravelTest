@extends('layouts.app')

@section('content')

<section class="form-section">
    <div class="container">
        <img class="phone-in-circle" src="images/PSD.png" alt="">
        <div class="form-body">
            <h2>Зарабатывай не выходя из дома<br>
            просто используй приложение</h2>
            <h1 class="colored-title">
                Assist Online
            </h1>
            <form action="{{ url('task') }}" method="POST" class="form-main">
                {{ csrf_field() }}
                <div class="group">
                    <label for="">Имя</label>
                    <input type="text" name="name" id="task-name">
                </div>

                <div class="group">
                    <label for="">Фамилия</label>
                    <input name="lastname" type="text" >
                </div>

                <div class="group">
                    <label for="">Возраст</label>
                    <input name="years" type="text" >
                </div>

                <div class="group">
                    <label for="">Пол</label>
                    <select name="gender" id="">
                        <option value="Мужской">Мужской</option>
                        <option value="Женский">Женский</option>
                        <option value="Я не определилось">Я не определилось</option>
                    </select>
                </div>

                <div class="group">
                    <label for="">Город</label>
                    <input name="city" type="text" >
                </div>

                <div class="group">
                    <label for="">Образование</label>
                    <input name="education" type="text" >
                </div>

                <div class="group">
                    <label for="">Специальность</label>
                    <input name="speciality" type="text" >
                </div>

                <div class="group">
                    <label for="">Занятость</label>
                    <input name="employment" type="text" >
                </div>

                <div class="group">
                    <label for="">Телефон</label>
                    <input name="phone" type="text" >
                </div>
                
                <div class="group">
                    <label for="">E-mail</label>
                    <input name="email" type="text" >
                </div>

                <div class="button-block">
                    <button type="submit" class="btn-submit">Отправить</button>
                    <a class=" politic" href="#">Политика конфиденциальности</a>
                </div>
                
                <!-- <button type="submit" class='send'>send</button> -->
            </form>
        </div>
    </div>
    <div class="bottom-line">
        <div class="container">
            <img src="images/arrow.png" alt="">
            <h3>Заполни анкету сейчас</h3>
        </div>
    </div>
</section>

<section class="show-tasks">
@if(count($tasks) > 0)
<div class="cards">
    
    <div class="container">
        @foreach($tasks as $task)
        <div class="task">
            <div class="number-task">
                <h1>№{{ $task-> id }}</h1>
            
            </div>
            <div class="name tab">
                <div class="info ">
                    <p >{{ $task-> name }}</p>
                </div>
            </div>
            <div class="city tab">
            <div class="info ">
                    <p >{{ $task-> city }}</p>
                </div>
            </div>
            <div class="years-old tab">
            <div class="info ">
                    <p >{{ $task-> years }}</p>
                </div>
            </div>
            <div class="specialty tab">
            <div class="info ">
                    <p >{{ $task-> speciality }}</p>
                </div>
            </div>
            <div class="message tab">
            <div class="info">
                    <button сlass="btn">Написать</button>
                </div>
            </div>  
            <div class="call tab">
            <div class="info">
                    <button сlass="btn">Позвонить</button>
                </div>
            </div>    
            
            <form class="delete-task" action="{{url('task/'.$task->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn-delete"><img src="images/delete.png" alt=""></button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endif
</section>
@endsection