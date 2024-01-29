@extends('admin.layout.crud')

@section('title')
    Events
@endsection

@section("table")
    <section class="table-buttons">
        @component ('admin.components.table-filter')
        @endcomponent

        @component('admin.components.modal-filter')
            <div class="content-title">
                <h3>Table Filter</h3>
            </div>

            <div class="content-text">
                <label for="title">Title</label>
                <input type="text">
            </div>
            <div class="content-text">
                <label for="date">Date</label>
                <input type="date">
            </div>
            <div class="content-text">
                <label for="time">Time</label>
                <input type="time">
            </div>
            <div class="content-buttons">
                <button class="content-buttons-accept">
                    <h3>Apply</h3>
                </button>
                <button class="content-buttons-deny">
                    <h3>Cancel</h3>
                </button>
            </div>
        @endcomponent

        @component('admin.components.modal-table-destroy')
            <div class="delete-modal-content">
                <div class="content-title">
                    <h3>Confirm Deletion</h3>
                </div>
                <div class="content-buttons">
                    <button class="content-buttons-accept">
                        <h3>Confirm</h3>
                    </button>
                    <button class="content-buttons-deny">
                        <h3>Cancel</h3>
                    </button>
                </div>
            </div>
        @endcomponent
    </section>

    <div class="table-records">
        @foreach($events as $event_element)
            <article class="table-record">
                <div class="table-record-buttons">
                    <div class="edit-button" data-endpoint="{{route('events_edit', ["event" => $event_element->id])}}">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="destroy-button"  data-endpoint="{{route('events_destroy', ["event" => $event_element->id])}}">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="table-data">
                    <ul>
                        <li><span>Name</span>{{$event_element->name}}</li>
                        <li><span>Address</span>{{$event_element->address}}</li>
                        <li>
                            <span>Poblacion</span>
                            @foreach ($towns as $town)
                                @if ($town->id == $event_element->town_id)
                                    {{$town->name}}
                                @endif
                            @endforeach                    
                        </li>
                        <li><span>Price</span>{{$event_element->price}}</li>
                        <li><span>Date</span>{{$event_element->start_date }} to {{$event_element->end_date}}</li>
                        <li><span>Time</span>{{$event_element->start_time }} to {{$event_element->end_time}}</li>
                    </ul>
                </div>
            </article>
        @endforeach
    </div>

    <div class="table-pagination">
    <span>{{trans_choice("admin/pagination.total", 1 , ["count" => 1])}}</span>
    </div>
@endsection


@section('form')
    <div class="form-bar">
        <div class="form-tabs">
            <ul>
                <li class="tab active" data-tab="general">General</li>
                <li class="tab" data-tab="images">Imágenes</li>
            </ul>
        </div>
        <div class="form-buttons">
            <div class="create-button" data-endpoint="{{route('events_create')}}">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>broom</title><path d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" /></svg>
                </button>
            </div>
            <div class="store-button" data-endpoint="{{route('events_store')}}">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>content-save</title><path d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" /></svg>
                </button>
            </div>
        </div>
    </div>

    <form class="admin-form">
        <div class="tab-content active" data-tab="general">
            <input type="hidden" name="id" value="{{$event->id ?? ''}}">
            <div class="form-row">
                <div class="form-element">
                    <div class="form-element-label">
                        <label for="name">Nombre</label>
                    </div>
                    <div class="form-element-input">
                        <input type="text" name="name" value="{{$event->name ?? ''}}">
                    </div>
                </div>
                <div class="form-element">
                    <div class="form-element-label">
                        <label for="address">Dirección</label>
                    </div>
                    <div class="form-element-input">
                        <input type="text" name="address" value="{{$event->address ?? ''}}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-element">
                    <div class="form-element-label">
                        <label for="end_time">Población</label>
                    </div>
                    <div class="form-element-input">
                        <select name="town_id">
                            <option value=""></option>
                                @foreach ($towns as $town)
                                    <option value="{{$town->id}}" {{ $town->id == $event->town_id ? 'selected' : ''}}>{{$town->name}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-element">
                    <div class="form-element-label">
                        <label for="price">Precio</label>
                    </div>
                    <div class="form-element-input">
                        <input type="number" name="price" value="{{$event->price ?? '0'}}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-element">
                    <div class="form-element-label">
                        <label for="start_date">Fecha Inicio</label>
                    </div>
                    <div class="form-element-input">
                        <input type="date" name="start_date" value="{{$event->start_date ?? ''}}">
                    </div>
                </div>
                <div class="form-element">
                    <div class="form-element-label">
                        <label for="end_date">Fecha Fin</label>
                    </div>
                    <div class="form-element-input">
                        <input type="date" name="end_date" value="{{$event->end_date ?? ''}}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-element">
                    <div class="form-element-label">
                        <label for="start_time">Hora Inicio</label>
                    </div>
                    <div class="form-element-input">
                        <input type="time" name="start_time" value="{{$event->start_time ?? ''}}">
                    </div>
                </div>
                <div class="form-element">
                    <div class="form-element-label">
                        <label for="end_time">Hora Fin</label>
                    </div>
                    <div class="form-element-input">
                        <input type="time" name="end_time" value="{{$event->end_time ?? ''}}">
                    </div>
                </div>
            </div>
            <div class="form-tabs locale">
                <ul>
                    @foreach ($languages as $language)
                        <li class="tab {{$loop->first ? 'active' : '' }}" data-tab="{{$language->label}}">{{$language->label}}</li>
                    @endforeach    
                </ul>
            </div>
            @foreach ($languages as $language)
                <div class="tab-content {{$loop->first ? 'active' : '' }}" data-tab="{{$language->label}}">
                    <div class="form-row">
                        <div class="form-element-wide">
                            <div class="form-element-label">
                                <label for="title-{{$language->label}}">Título</label>
                            </div>
                            <div class="form-element-input">
                                <input type="text" name="locale['title.{{$language->label}}']" value="locale['title.{{$language->label}}']">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-element-wide">
                            <div class="form-element-label">
                                <label for="description-{{$language->label}}">Descripción</label>
                            </div>
                            <div class="form-element-input">
                                <textarea name="locale['description.{{$language->label}}']" text="locale['description.{{$language->label}}']"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach    
        </div>
        <div class="tab-content" data-tab="images">
            <div class="form-element">
                <div class="form-element-label">
                    <label for="main-image">Imagen Principal</label>
                </div>
                <div class="form-element-input">
                    <input type="image" name="">
                </div>
            </div>
        </div>
    </form>
@endsection