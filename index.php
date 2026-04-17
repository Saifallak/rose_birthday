<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>عيد ميلاد روز 🌹</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --rose: #e8637a; --rose-light: #f4a0b0; --rose-dark: #c0405a;
      --gold: #d4a84b; --gold-light: #f0d080;
      --cream: #fff8f0; --deep: #3a1a24; --ink: #5c2e3a;
    }
    * { margin:0; padding:0; box-sizing:border-box; }
    html { scroll-behavior:smooth; }
    body { min-height:100vh; background:var(--cream); font-family:'Tajawal',sans-serif; overflow-x:hidden; }

    .bg-layer {
      position:fixed; inset:0; z-index:0; pointer-events:none;
      background:
        radial-gradient(ellipse 80% 60% at 20% 10%,#fde8ed99 0%,transparent 60%),
        radial-gradient(ellipse 60% 50% at 80% 80%,#f4a0b033 0%,transparent 55%),
        radial-gradient(ellipse 40% 40% at 50% 50%,#fff8f0 0%,#fde3ea 100%);
    }

    .petal { position:fixed; pointer-events:none; z-index:1; animation:floatDown linear infinite; opacity:0; }
    @keyframes floatDown {
      0%{transform:translateY(-60px) rotate(0deg);opacity:0}
      10%{opacity:.55} 90%{opacity:.35}
      100%{transform:translateY(110vh) rotate(360deg);opacity:0}
    }

    #confetti-canvas { position:fixed; inset:0; pointer-events:none; z-index:999; }

    /* COUNTDOWN */
    #countdown-screen {
      position:fixed; inset:0; z-index:900;
      background:linear-gradient(160deg,#3a1a24 0%,#5c2035 60%,#8a3050 100%);
      display:flex; flex-direction:column; align-items:center; justify-content:center;
      padding:2rem; transition:opacity .8s,visibility .8s;
    }
    #countdown-screen.gone { opacity:0; visibility:hidden; pointer-events:none; }

    .cd-stars { position:absolute; inset:0; overflow:hidden; pointer-events:none; }
    .cd-star { position:absolute; border-radius:50%; background:#fff; animation:twinkle linear infinite; }
    @keyframes twinkle { 0%,100%{opacity:.1;transform:scale(1)} 50%{opacity:.9;transform:scale(1.4)} }

    .cd-title {
      font-family:'Playfair Display',serif; font-size:clamp(1.6rem,5vw,2.8rem);
      color:var(--gold-light); text-align:center; font-style:italic;
      margin-bottom:.3rem; text-shadow:0 0 20px rgba(212,168,75,.4);
    }
    .cd-sub { color:#f4a0b0; font-size:1rem; margin-bottom:2rem; text-align:center; letter-spacing:.04em; }

    .cd-blocks { display:flex; gap:1rem; flex-wrap:wrap; justify-content:center; margin-bottom:2rem; }
    .cd-block {
      background:rgba(255,255,255,.08); border:1px solid rgba(244,160,176,.3);
      border-radius:18px; padding:.8rem 1.2rem; min-width:78px;
      text-align:center; backdrop-filter:blur(6px); transition:transform .3s;
    }
    .cd-block:hover { transform:scale(1.06); }
    .cd-num { font-family:'Playfair Display',serif; font-size:clamp(2rem,6vw,3.2rem); color:#fff; display:block; line-height:1; }
    .cd-label { font-size:.75rem; color:#f4a0b0; letter-spacing:.08em; margin-top:.3rem; }
    .cd-note { color:rgba(255,255,255,.5); font-size:.82rem; text-align:center; margin-bottom:1.5rem; }

    .btn-skip {
      background:transparent; border:1.5px solid rgba(244,160,176,.5); color:#f4a0b0;
      padding:.55rem 1.8rem; border-radius:50px; font-family:'Tajawal',sans-serif;
      font-size:.95rem; cursor:pointer; transition:background .2s,color .2s; letter-spacing:.05em;
    }
    .btn-skip:hover { background:rgba(244,160,176,.15); color:#fff; }

    /* MAIN */
    .page {
      position:relative; z-index:2;
      display:flex; flex-direction:column; align-items:center;
      padding:2.5rem 1rem 4rem; gap:2.4rem;
    }

    .crown-wrap { font-size:3rem; animation:pulse 3s ease-in-out infinite; }
    @keyframes pulse { 0%,100%{transform:scale(1) rotate(-3deg)} 50%{transform:scale(1.08) rotate(3deg)} }

    .title-block { text-align:center; }
    .title-block h1 {
      font-family:'Playfair Display',serif; font-size:clamp(2.2rem,7vw,3.8rem); font-style:italic;
      color:var(--rose-dark); line-height:1.2; text-shadow:2px 2px 0 #fff,4px 4px 14px #f4a0b055;
    }
    .title-block .sub { margin-top:.5rem; font-size:1rem; color:var(--ink); font-weight:300; opacity:.85; }
    .divider {
      display:flex; align-items:center; gap:.7rem; margin:.8rem auto 0;
      width:fit-content; color:var(--gold); font-size:.85rem; letter-spacing:.12em;
    }
    .divider::before,.divider::after { content:''; display:block; width:50px; height:1px; background:linear-gradient(90deg,transparent,var(--gold)); }
    .divider::after { transform:scaleX(-1); }

    .card {
      width:100%; max-width:560px;
      background:rgba(255,255,255,.78); backdrop-filter:blur(10px);
      border:1px solid rgba(228,140,160,.3); border-radius:28px;
      padding:2rem 2.2rem 2.2rem;
      box-shadow:0 4px 28px rgba(192,64,90,.1),0 1px 0 rgba(255,255,255,.9) inset;
      position:relative; overflow:hidden;
    }
    .card::before {
      content:''; position:absolute; top:-2px; left:-2px; right:-2px; bottom:-2px; border-radius:30px;
      background:linear-gradient(135deg,var(--rose-light),var(--gold-light),var(--rose-light));
      z-index:-1; opacity:.35;
    }
    .card-rose { position:absolute; font-size:1.7rem; opacity:.35; transition:opacity .3s; }
    .card:hover .card-rose { opacity:.6; }
    .card-rose.tl { top:12px; right:14px; transform:rotate(-20deg); }
    .card-rose.br { bottom:12px; left:14px; transform:rotate(15deg); }

    /* SCHEDULE */
    .schedule-card { max-width:600px; }
    .schedule-header { text-align:center; margin-bottom:1.5rem; }
    .schedule-header h2 { font-family:'Playfair Display',serif; font-size:1.55rem; font-style:italic; color:var(--rose-dark); }
    .schedule-header p { font-size:.88rem; color:var(--ink); opacity:.7; margin-top:.3rem; }
    .schedule-info {
      background:linear-gradient(135deg,#fde8ed,#fff8f0); border:1px solid rgba(212,168,75,.35);
      border-radius:16px; padding:1rem 1.3rem; margin-bottom:1.5rem;
      font-size:.92rem; color:var(--ink); line-height:2; text-align:center;
    }
    .schedule-info strong { color:var(--rose-dark); }
    .section-title { text-align:center; margin-bottom:1.2rem; font-size:.92rem; font-weight:700; color:var(--rose-dark); letter-spacing:.05em; }
    .timeline { display:flex; flex-direction:column; gap:.9rem; }
    .tl-item {
      display:flex; gap:.9rem; align-items:flex-start; padding:.9rem 1rem;
      background:rgba(255,248,240,.85); border-radius:18px; border:1px solid rgba(228,140,160,.2);
      transition:transform .2s,box-shadow .2s;
    }
    .tl-item:hover { transform:translateX(-4px); box-shadow:0 4px 16px rgba(192,64,90,.1); }
    .tl-time { min-width:52px; font-family:'Playfair Display',serif; font-size:.95rem; color:var(--rose-dark); font-weight:700; padding-top:.18rem; white-space:nowrap; }
    .tl-dot { width:10px; height:10px; min-width:10px; background:var(--rose); border-radius:50%; margin-top:.46rem; box-shadow:0 0 0 3px rgba(232,99,122,.2); }
    .tl-body { flex:1; }
    .tl-body strong { display:block; font-size:.93rem; color:var(--deep); margin-bottom:.2rem; }
    .tl-body p { font-size:.83rem; color:var(--ink); opacity:.8; line-height:1.55; }
    .schedule-footer {
      text-align:center; margin-top:1.4rem; background:linear-gradient(135deg,#e8637a22,#d4a84b22);
      border-radius:14px; padding:.9rem 1rem; font-size:.88rem; color:var(--ink); line-height:1.8;
    }

    /* WISH FORM */
    label { display:block; font-size:.88rem; font-weight:500; color:var(--ink); margin-bottom:.45rem; }
    label span { color:var(--rose); font-size:.78rem; margin-right:.3rem; }
    input[type="text"],textarea {
      width:100%; background:rgba(255,248,240,.9); border:1.5px solid rgba(228,140,160,.5);
      border-radius:14px; padding:.75rem 1.1rem; font-family:'Tajawal',sans-serif;
      font-size:1rem; color:var(--deep); outline:none; resize:none;
      transition:border-color .2s,box-shadow .2s,background .2s;
    }
    input[type="text"]::placeholder,textarea::placeholder { color:#c09aab; }
    input[type="text"]:focus,textarea:focus { border-color:var(--rose); background:#fff; box-shadow:0 0 0 3px rgba(232,99,122,.15); }
    .field { margin-bottom:1.3rem; }
    textarea { height:110px; line-height:1.6; }
    .counter-badge { text-align:center; margin-bottom:1.4rem; font-size:.9rem; color:var(--ink); opacity:.75; }
    .counter-badge strong { font-family:'Playfair Display',serif; color:var(--rose-dark); font-size:1.3rem; }
    .btn-send {
      width:100%; padding:1rem; background:linear-gradient(135deg,var(--rose),var(--rose-dark));
      color:#fff; border:none; border-radius:16px; font-family:'Tajawal',sans-serif;
      font-size:1.1rem; font-weight:500; cursor:pointer; letter-spacing:.06em;
      box-shadow:0 4px 18px rgba(192,64,90,.35); transition:transform .15s,box-shadow .15s;
      display:flex; align-items:center; justify-content:center; gap:.5rem; min-height:52px;
    }
    .btn-send:hover:not(:disabled) { transform:translateY(-2px); box-shadow:0 8px 26px rgba(192,64,90,.45); }
    .btn-send:active:not(:disabled) { transform:translateY(0); }
    .btn-send:disabled { opacity:.8; cursor:default; }
    .spinner { display:inline-block; width:20px; height:20px; border:2.5px solid rgba(255,255,255,.4); border-top-color:#fff; border-radius:50%; animation:spin .7s linear infinite; flex-shrink:0; }
    @keyframes spin { to{transform:rotate(360deg)} }
    .success-msg { display:none; text-align:center; padding:1.6rem 1rem; animation:popIn .5s cubic-bezier(.34,1.56,.64,1) both; }
    .success-msg.visible { display:block; }
    @keyframes popIn { from{opacity:0;transform:scale(.7)} to{opacity:1;transform:scale(1)} }
    .success-msg .check { font-size:3.5rem; display:block; margin-bottom:.6rem; }
    .success-msg h3 { font-family:'Playfair Display',serif; color:var(--rose-dark); font-size:1.5rem; margin-bottom:.4rem; }
    .success-msg p { color:var(--ink); font-size:.95rem; opacity:.8; }
    .form-area.hidden { display:none; }
    footer { text-align:center; font-size:.8rem; color:var(--ink); opacity:.4; }
  </style>
</head>
<body>

<div class="bg-layer"></div>
<canvas id="confetti-canvas"></canvas>

<!-- COUNTDOWN -->
<div id="countdown-screen">
  <div class="cd-stars" id="cdStars"></div>
  <div class="cd-title">🌹 عيد ميلاد روز 🌹</div>
  <div class="cd-sub">العد التنازلي ليوم الاحتفال</div>
  <div class="cd-blocks">
    <div class="cd-block"><span class="cd-num" id="cd-days">--</span><div class="cd-label">يوم</div></div>
    <div class="cd-block"><span class="cd-num" id="cd-hours">--</span><div class="cd-label">ساعة</div></div>
    <div class="cd-block"><span class="cd-num" id="cd-mins">--</span><div class="cd-label">دقيقة</div></div>
    <div class="cd-block"><span class="cd-num" id="cd-secs">--</span><div class="cd-label">ثانية</div></div>
  </div>
  <div class="cd-note">الجمعة ١٧ أبريل ٢٠٢٦ 🎀 الساعة ٧:٠٠ مساءً</div>
  <button class="btn-skip" onclick="skipCountdown()">تخطي ←</button>
</div>

<!-- MAIN PAGE -->
<div class="page" id="mainPage">
  <div class="crown-wrap">👑</div>

  <div class="title-block">
    <h1>عيد ميلاد روز 🌹</h1>
    <p class="sub">يوم مليان فرحة وأمنيات حلوة</p>
    <div class="divider">✦</div>
  </div>

  <!-- SCHEDULE — يتحكم فيه الـ JS -->
  <div class="card schedule-card" id="scheduleCard">
    <span class="card-rose tl">🌸</span>
    <span class="card-rose br">🎀</span>
    <div class="schedule-header">
      <h2>🎀🌸 عيد ميلاد روز الأول 🌸🎀</h2>
      <p>حستناكم بقلب مليان 💗</p>
    </div>
    <div class="schedule-info">
      ✨ يوم <strong>الجمعة</strong> الموافق <strong>١٧ أبريل ٢٠٢٦</strong> 🤩<br/>
      ✨ الساعة <strong>٧:٠٠</strong> بالظبط أو قبل كده 🤩<br/>
      ✨ في <strong>بيتنا</strong> 🤩
    </div>
    <div class="section-title">🦋💖 برنامج يومنا 💖🦋</div>
    <div class="timeline">
      <div class="tl-item">
        <div class="tl-time">٧:٠٠</div><div class="tl-dot"></div>
        <div class="tl-body"><strong>🪅 فقرة الـ Welcome &amp; QR Wishes</strong><p>حنستقبلكم بالضحكة واللعب، وحتلاقوا QR Code مستنيكم عشان تكتبوا أول أمنية لـ روز 💌📱</p></div>
      </div>
      <div class="tl-item">
        <div class="tl-time">٧:٣٠</div><div class="tl-dot"></div>
        <div class="tl-body"><strong>📸 فقرة التصوير — Photo Session</strong><p>حنتصور سوا في كورنر الديكور ونوثق أجمل اللحظات مع روز وهي منورة سنة أولى 👗✨</p></div>
      </div>
      <div class="tl-item">
        <div class="tl-time">٧:٤٥</div><div class="tl-dot"></div>
        <div class="tl-body"><strong>🎨 فقرة المبدعين الصغيرين — Art &amp; Colors</strong><p>معانا أشكال جبس جاهزة ومستنية ألوانكم! حنلون ونبدع بالصلصال ونعمل أحلى "تحف فنية" 🖌️🗿</p></div>
      </div>
      <div class="tl-item">
        <div class="tl-time">٨:١٥</div><div class="tl-dot"></div>
        <div class="tl-body"><strong>🎂 فقرة التورتة والـ Cake Smash</strong><p>أهم لحظة في اليوم! حنطفي الشمعة الأولى ونشوف بهدلة الكيكة اللذيذة 🎂🥳</p></div>
      </div>
      <div class="tl-item">
        <div class="tl-time">٨:٤٥</div><div class="tl-dot"></div>
        <div class="tl-body"><strong>💃🏻 فقرة الـ Baby Disco</strong><p>أغاني الأطفال اللي بنحبها، حنرقص ونملا البيت بهجة وسعادة 🎶👶🏻🪩</p></div>
      </div>
    </div>
    <div class="schedule-footer">
      🍭🍬🎀 متتأخروش… حستناكم ننبسط!<br/>
      بهجة اليوم مش حتكمل من غيركم ولمتكم حوالينا في أول سنة لـ روز 🎀🍬🍭
    </div>
  </div>

  <!-- WISH CARD -->
  <div class="card" style="max-width:520px;">
    <span class="card-rose tl">💌</span>
    <span class="card-rose br">🌹</span>
    <div class="counter-badge" id="counterBadge" style="display:none;">
      🎀 <strong id="wishCount">0</strong> أمنية وصلت لروز
    </div>
    <div style="text-align:center;margin-bottom:1.5rem;">
      <div style="font-family:'Playfair Display',serif;font-size:1.35rem;color:var(--rose-dark);font-style:italic;">اكتب أمنيتك لروز 🌷</div>
      <div style="font-size:.85rem;color:var(--ink);opacity:.7;margin-top:.3rem;">كلمتك هتفضل معاها طول عمرها 💕</div>
    </div>
    <div class="form-area" id="formArea">
      <div class="field">
        <label>اسمك <span>(اختياري)</span></label>
        <input type="text" id="nameInput" placeholder="مثلاً: أحمد، سارة، صديقتك القديمة…" maxlength="60" />
      </div>
      <div class="field">
        <label>أمنيتك لروز 💌</label>
        <textarea id="wishInput" placeholder="اكتب هنا كل ما تتمناه لروز في عيد ميلادها…" maxlength="500"></textarea>
      </div>
      <button class="btn-send" id="sendBtn" onclick="sendWish()">
        <span id="btnLabel">أرسل أمنيتك 🌷</span>
      </button>
    </div>
    <div class="success-msg" id="successMsg">
      <span class="check">🎉</span>
      <h3>تم الحفظ!</h3>
      <p>أمنيتك وصلت لروز بأمان 💕<br/>شكراً لك على هذه اللحظة الجميلة</p>
    </div>
  </div>

  <footer>made with 💗 for Rose · 17 April 2026</footer>
</div>

<script>
/* ══════════════════════════════════════
   CONFIG — غيّر السطر ده بس لأي حفلة جاية
   ══════════════════════════════════════ */
const PARTY_DATE = new Date('2026-04-17T19:00:00');

/* ══ DYNAMIC INIT ══ */
(function () {
  const partyStarted = new Date() >= PARTY_DATE;

  if (partyStarted) {
    /* الحفلة بدأت: اخبي الكاونتر والبرنامج على طول */
    document.getElementById('countdown-screen').classList.add('gone');
    document.getElementById('scheduleCard').style.display = 'none';
  } else {
    /* الحفلة لسه: شغّل الكاونتر */
    initStars();
    initCountdown();
  }
})();

function initStars() {
  const w = document.getElementById('cdStars');
  for (let i = 0; i < 60; i++) {
    const s = document.createElement('div'); s.className = 'cd-star';
    const sz = 1 + Math.random() * 3;
    s.style.cssText = `width:${sz}px;height:${sz}px;top:${Math.random()*100}%;left:${Math.random()*100}%;animation-duration:${1.5+Math.random()*3}s;animation-delay:${Math.random()*4}s;`;
    w.appendChild(s);
  }
}

function initCountdown() {
  let cdInterval;
  function updateCd() {
    const diff = PARTY_DATE - new Date();
    if (diff <= 0) {
      /* وصلنا للمعاد وهي فاتحة الصفحة — اخبي الكاونتر والبرنامج */
      document.getElementById('countdown-screen').classList.add('gone');
      document.getElementById('scheduleCard').style.display = 'none';
      clearInterval(cdInterval);
      return;
    }
    const d = Math.floor(diff / 86400000),
          h = Math.floor(diff % 86400000 / 3600000),
          m = Math.floor(diff % 3600000 / 60000),
          s = Math.floor(diff % 60000 / 1000);
    document.getElementById('cd-days').textContent  = String(d).padStart(2,'0');
    document.getElementById('cd-hours').textContent = String(h).padStart(2,'0');
    document.getElementById('cd-mins').textContent  = String(m).padStart(2,'0');
    document.getElementById('cd-secs').textContent  = String(s).padStart(2,'0');
  }
  updateCd();
  cdInterval = setInterval(updateCd, 1000);
}

function skipCountdown() {
  document.getElementById('countdown-screen').classList.add('gone');
}
</script>

<script>
/* Petals */
(function(){
  const cols = ['#f4a0b0','#e8637a','#fde8ed','#d4a84b','#fff0f5'];
  for (let i = 0; i < 18; i++) {
    const el = document.createElement('div'); el.className = 'petal';
    const sz = 10 + Math.random()*18, c = cols[Math.floor(Math.random()*cols.length)];
    el.innerHTML = `<svg width="${sz}" height="${sz*1.2}" viewBox="0 0 10 12"><ellipse cx="5" cy="6" rx="4.5" ry="5.5" fill="${c}" opacity=".8"/></svg>`;
    el.style.left = (Math.random()*100)+'vw';
    el.style.animationDuration = (6+Math.random()*10)+'s';
    el.style.animationDelay    = (Math.random()*12)+'s';
    document.body.appendChild(el);
  }
})();
</script>

<script>
/* Confetti */
const canvas = document.getElementById('confetti-canvas'), ctx = canvas.getContext('2d');
let particles = [], animating = false;
function resizeCanvas(){ canvas.width = window.innerWidth; canvas.height = window.innerHeight; }
window.addEventListener('resize', resizeCanvas); resizeCanvas();

function spawnConfetti(){
  particles = [];
  const cols = ['#e8637a','#f4a0b0','#d4a84b','#f0d080','#fff','#fde8ed','#c0405a'];
  for (let i = 0; i < 140; i++){
    particles.push({
      x:Math.random()*canvas.width, y:-10-Math.random()*200,
      w:6+Math.random()*8, h:3+Math.random()*5,
      color:cols[Math.floor(Math.random()*cols.length)],
      vy:2+Math.random()*4, vx:-1.5+Math.random()*3,
      rot:Math.random()*360, vr:-3+Math.random()*6, alpha:1
    });
  }
  if (!animating) loop();
}
function loop(){
  animating = true; ctx.clearRect(0,0,canvas.width,canvas.height);
  particles.forEach(p=>{
    p.y+=p.vy; p.x+=p.vx; p.rot+=p.vr;
    if(p.y>canvas.height*.85) p.alpha-=.02;
    ctx.save(); ctx.globalAlpha=Math.max(0,p.alpha);
    ctx.translate(p.x,p.y); ctx.rotate(p.rot*Math.PI/180);
    ctx.fillStyle=p.color; ctx.fillRect(-p.w/2,-p.h/2,p.w,p.h);
    ctx.restore();
  });
  particles = particles.filter(p=>p.alpha>0);
  if(particles.length) requestAnimationFrame(loop); else animating=false;
}
</script>

<script>
async function loadCount(){
  try{
    const r = await fetch('get_count.php');
    if(!r.ok) return;
    const d = await r.json();
    if(d.count>0){
      document.getElementById('wishCount').textContent = d.count;
      document.getElementById('counterBadge').style.display = 'block';
    }
  }catch(e){}
}
loadCount();

async function sendWish(){
  const wishEl = document.getElementById('wishInput');
  const wish   = wishEl.value.trim();
  if(!wish){
    wishEl.focus();
    wishEl.style.borderColor = 'var(--rose-dark)';
    wishEl.style.boxShadow   = '0 0 0 3px rgba(192,64,90,.25)';
    setTimeout(()=>{ wishEl.style.borderColor=''; wishEl.style.boxShadow=''; },1200);
    return;
  }
  const btn   = document.getElementById('sendBtn');
  const label = document.getElementById('btnLabel');
  btn.disabled = true;
  label.innerHTML = '<span class="spinner"></span> جاري الحفظ…';

  const name = document.getElementById('nameInput').value.trim() || 'مجهول';
  const body = new FormData();
  body.append('name', name);
  body.append('wish', wish);

  let success = false, count = null;
  try{
    const r = await fetch('save_wish.php',{method:'POST',body});
    if(r.ok){ const d = await r.json(); if(d.success){ success=true; count=d.count; } }
  }catch(e){
    await new Promise(res=>setTimeout(res,900));
    success = true;
  }

  if(success){
    document.getElementById('formArea').classList.add('hidden');
    document.getElementById('successMsg').classList.add('visible');
    spawnConfetti();
    if(count!==null){
      document.getElementById('wishCount').textContent = count;
      document.getElementById('counterBadge').style.display = 'block';
    }
  } else {
    btn.disabled = false;
    label.innerHTML = 'أرسل أمنيتك 🌷';
    alert('حصل خطأ، حاول مرة تانية 😔');
  }
}
</script>

</body>
</html>
