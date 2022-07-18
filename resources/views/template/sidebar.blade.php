<input type="checkbox" id="check">
<label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>ArVal</header>
  <ul>
    <li><a href="/"><i class="fas fa-qrcode"></i>Dashboard</a></li>
    <li><a href="/2"><i class="fas fa-link"></i>Shortcuts</a></li>
    <li><a href="/3"><i class="fas fa-stream"></i>Overview</a></li>
    <li ><a href="/4"><i class="fas fa-calendar-week"></i>Events</a></li>
    <li><a href="/5"><i class="far fa-question-circle"></i>About</a></li>
    <li><a href="/6"><i class="fas fa-sliders-h"></i>Services</a></li>
    <li><a href="/7"><i class="far fa-envelope"></i>Contact</a></li>
  </ul>
</div>


        <style>
            *{
          padding: 0;
          margin: -6px 0;
          list-style: none;
          text-decoration: none;
        }
        body {
          font-family: 'Roboto', sans-serif;
        }
        .sidebar {
          position: fixed;
          left: 0px;
          width: 250px;
          height: 100%;
          background: #042331;
          transition: all .5s ease;
        }
        .sidebar header {
          font-size: 22px;
          color: white;
          line-height: 70px;
          text-align: center;
          background: #063146;
          user-select: none;
          margin-left: -50px;
        }
        .sidebar ul a{
          display: block;
          height: 100%;
          width: 100%;
          line-height: 65px;
          font-size: 20px;
          color: white;
          padding-left: 40px;
          box-sizing: border-box;
          border-bottom: 1px solid black;
          transition: .4s;
          text-decoration: none;
          margin-left: -50px;
        }
        ul li:hover a{
          padding-left: 50px;
        }
        .sidebar ul a i{
          margin-right: 16px;
        }
        #check{
          display: none;
        }
        label #btn,label #cancel{
          position: absolute;
          background: #042331;
          border-radius: 3px;
          cursor: pointer;
        }
        label #btn{
          left: 250px;
          top: 40px;
          font-size: 25px;
          color: white;
          padding: 6px 12px;
          opacity: 0;
          pointer-events: none;
          transition: all .5s;
        }
        label #cancel{
          z-index: 1111;
          left: 195px;
          top: 25px;
          font-size: 30px;
          color: #0a5275;
          padding: 4px 9px;
          transition: all .5s ease;
        }
        #check:checked ~ .sidebar{
          left: -250px;
        }
        #check:checked ~ label #btn{
          left: 40px;
          opacity: 1;
          pointer-events: auto;
        }
        #check:checked ~ label #cancel{
          left: -195px;
        }
        #check:checked ~ section{
          margin-left: 0px;
        }

        </style>
