<x-header />

    <main>
        <section id="hero" class="d-flex justify-content-center align-items-center">
            <h1 class="m-3 text-white bg-dark p-1 opacity-75"> Онлайн курсы - это круто!</h1>
        </section>

        <section id="about">
            <div class="container">
                <h2 class="m-3">О нас</h2>

                <div class="row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Преимущество 1</h5>
                                <p class="card-text">Описание преимущества</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Преимущество 2</h5>
                                <p class="card-text">Описание преимущества</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Преимущество 3</h5>
                                <p class="card-text">Описание преимущества</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Преимущество 4</h5>
                                <p class="card-text">Описание преимущества</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="courses">
            <div class="container">
                <h2 class="m-3">Наши курсы</h2>
                <div class="d-fle   x">
                    @foreach ($all_courses as $item)
                        <div class="card" style="width: 18rem;">
                            <div class="card-block">
                                <img src="/images/{{$item->image}}" class="card-img-top" alt="..." >
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$item->title}}</h5>
                                <p class="card-text">{{$item->description}}</p>
                                <p class="card-text">Стоимость курса: <b>{{$item->cost}}</b>₽</p>
                                <p class="card-text">Продолжительность: <b>{{$item->duration}}</b> недель(-и/-я)</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                    @endforeach

                </div>
                {{ $all_courses->withQueryString()->links('pagination::bootstrap-5') }}

            </div>
        </section>

        <section id="enroll">
            <div class="container">

                <form action="/enroll" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Введите свой email</label>
                        <input type="email" class="form-control" id="email" name="email" >
                        @error('email')
                            <div class="alert alert-danger mt-3" role="alert">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Введите свое имя</label>
                        <input type="text" class="form-control" id="name" name="name" >
                        @error('name')
                            <div class="alert alert-danger mt-3" role="alert">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Выберите курс</label>
                        <select class="form-select" name="course" required>
                            @foreach ($all_courses as $item)
                                <option value="{{$item->id}}"> {{$item->title}} </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Записаться</button>
                </form>
            </div>
        </section>
    </main>
