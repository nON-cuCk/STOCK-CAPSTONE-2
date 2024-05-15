<div>
<style>
  
    .floor-content {
        display: inline-block;
        padding: 20px;
        position: relative;
    }
    

.CasDean,
.CAS106,
.CAS105,
.CAS104,
.MCL,
.CAS103,
.CAS102,
.CAS101,
.CAS107,
.CAS108,
.CAS109,
.CAS110,
.CAS111,
.CAS112,
.CAS-SSG {
    position: absolute;
    cursor: pointer;
    display: flex;
    gap: 10px;
}
  .CasDean{
    top: 45px;
    left: 113px;
  }
  .CAS106{
    top: 45px;
    left: 233px;
  }
  .CAS105{
    top: 45px;
    left: 353px;
  }
  .CAS104{
    top: 45px;
    left: 470px;
  }
  .MCL{
    top: 45px;
    left: 530px;
  }
  .CAS103{
    top: 45px;
    left: 645px;
  }
  .CAS102{
    top: 45px;
    left: 765px;
  }
  .CAS101{
    top: 45px;
    left: 885px;
  }
  .CAS107{
    top: 220px;
    left: 173px;
  }
  .CAS108{
    top: 200px;
    left: 265px;
  }
  .CAS109{
    top: 200px;
    left: 385px;
  }
  .CAS-SSG{
    top: 200px;
    left: 485px;
  }
  .CAS110{
    top: 200px;
    left: 620px;
  }
  .CAS111{
    top: 200px;
    left: 740px;
  }
  .CAS112{
    top: 200px;
    left: 857px;
  }

  #eye-icons,
  #edit-icons {
      font-size: small;
      display: inline-block;
      margin-left: 13px;
  }

  #edit-icons {
      color: green;
      margin-left: -3px;
  }

  #eye-icons {
      color: gray;
      margin-left: 30px;
  }

  .edit-icon {
      color: green;
      margin-left: -13px;
  }
  .plus-icon{
      color: black;
      margin-left: -35px;
  }
  .circle-icon{
    margin-left: -70px;
  }

  .eye-icon {
      color: gray;
      padding-right: 25px;
  }
  .active {
    background-color: green; /* Active state background color */
}

.inactive {
    background-color: orange; /* Inactive state background color */
}

.refill {
    background-color: blue; /* Refill state background color */
}
</style>
<livewire:flash-message.flash-message />
<div class="scroll-container">
    <div id="ground-floor" class="floor-content">
        
        <img src="{{ asset('assets/img/GroundFloor.png') }}" alt="GroundFloor" width="1000px" height="300px">
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 2) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS106"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 1) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CasDean"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 3) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS105"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 4) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS104"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 10) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS103"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 6) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="MCL"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 5) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS107"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 7) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS108"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 8) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS109"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 9) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS110"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 13) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS111"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 14) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS112"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 15) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS101"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 12) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS102"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 1) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS106"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>INFO</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installation date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 11) as $fire_fetch_list)
                <tr>
            <td class="{{ empty($fire_fetch_list['type']) ? 'empty' : '' }}">{{ $fire_fetch_list['type'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td class="{{ empty($fire_fetch_list['serial_number']) ? 'empty' : '' }}">{{ $fire_fetch_list['serial_number'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td class="{{ empty($fire_fetch_list['status']) ? 'empty' : '' }}">{{ $fire_fetch_list['status'] ?: 'Empty' }}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="CAS-SSG"><i class="fas fa-eye eye-icon"></i></span>
</div>
        <h1>GROUND FLOOR</h1>
    </div>
</div>

