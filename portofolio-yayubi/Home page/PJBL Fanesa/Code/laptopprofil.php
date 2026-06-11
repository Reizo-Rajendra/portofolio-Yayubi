*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

:root{
  --bg-body:#c9651a;
  --bg-center:#fdf0dc;
  --accent:#8b3a0f;
  --text:#3d1500;
}

body{
  background:var(--bg-body);
  font-family:'Nunito',sans-serif;
  min-height:100vh;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  padding:20px;
}

/* TOMBOL KEMBALI */

.back-container{
  width:100%;
  max-width:900px;
  margin-bottom:14px;
}

.back-btn{
  display:inline-flex;
  align-items:center;
  gap:8px;

  text-decoration:none;

  background:white;
  color:#8b3a0f;

  padding:12px 22px;

  border-radius:14px;

  font-size:15px;
  font-weight:900;

  box-shadow:0 6px 18px rgba(0,0,0,0.18);

  transition:0.3s ease;
}

.back-btn:hover{
  transform:translateY(-3px);
  background:#ffe0bf;
}

/* TOPBAR */

.topbar{
  width:100%;
  max-width:900px;
  margin-bottom:10px;
}

.topbar-label{
  color:#ffe5c8;
  font-size:12px;
  font-weight:800;
  letter-spacing:1px;
}

/* CARD */

.card{
  width:100%;
  max-width:900px;

  display:grid;
  grid-template-columns:210px 1fr 210px;

  border-radius:20px;
  overflow:hidden;

  box-shadow:0 8px 30px rgba(0,0,0,0.25);
}

/* LEFT */

.left-panel{
  background:linear-gradient(to right,#f0a878,#fad4b8);

  padding:28px 20px;

  display:flex;
  flex-direction:column;
  justify-content:center;
  gap:18px;
}

.contact-item{
  display:flex;
  flex-direction:column;
  gap:4px;
}

.ct{
  font-family:'Fredoka One',cursive;
  color:#6b2000;
  font-size:18px;
}

.ci{
  color:#3d1500;
  font-size:11px;
  font-weight:800;
  line-height:1.7;
}

/* CENTER */

.center-panel{
  background:var(--bg-center);

  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;

  padding:30px 20px;
  gap:14px;
}

.pill{
  background:#e0a060;
  color:#8b3a0f;

  padding:6px 22px;

  border-radius:30px;

  font-size:12px;
  font-weight:900;
}

.logo-ring{
  width:150px;
  height:150px;

  border-radius:50%;
  overflow:hidden;

  background:white;

  box-shadow:0 6px 20px rgba(0,0,0,0.18);
}

.logo-ring img{
  width:100%;
  height:100%;
  object-fit:cover;
}

.brand{
  text-align:center;
}

.brand span{
  display:block;

  font-family:'Fredoka One',cursive;
  color:#8b3a0f;

  font-size:22px;
  letter-spacing:2px;
}

.tagline{
  text-align:center;

  color:#6b2a00;

  font-size:11px;
  font-style:italic;
  font-weight:800;

  line-height:1.8;
}

/* RIGHT */

.right-panel{
  background:linear-gradient(to left,#f0a878,#fad4b8);

  padding:28px 20px;

  display:flex;
  flex-direction:column;
  justify-content:center;
  gap:18px;
}

.chef-row{
  font-size:24px;
}

.desc-box{
  background:rgba(120,55,5,0.10);

  padding:16px;

  border-radius:14px;

  border:1px solid rgba(0,0,0,0.1);
}

.desc-box p{
  color:var(--text);

  font-size:11px;
  font-weight:700;

  line-height:1.9;
}

/* RESPONSIVE */

@media(max-width:860px){

  .card{
    grid-template-columns:1fr;
  }

  .left-panel,
  .center-panel,
  .right-panel{
    width:100%;
  }

}

@media(max-width:500px){

  body{
    padding:14px;
  }

  .back-btn{
    width:100%;
    justify-content:center;
  }

  .brand span{
    font-size:18px;
  }

  .logo-ring{
    width:120px;
    height:120px;
  }

}