<?php

function p($data = null) {

    if (is_null($data)) return;

    $randid = rand();

    echo "
      <style>
        #log-" . $randid . " {
          padding: 10px 20px;
          background-color: rgba(220,220,220,.65);
          position: fixed; z-index: 100000;
          height: 100%;
          overflow-y: auto;
          top: 0;
          left: 0;
          box-shadow: 0 0 30px rgba(0,0,0,0.8);
          transition: transform .5s ease;
          border-right: solid 30px #" . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT) . ";
          transform: translate(calc(-100% + 30px),0);

          backdrop-filter: blur(7px);
          font-weight: 600;
        }

        #log-" . $randid . ":hover {
          transform: translate(0,0);
          transition: transform .3s ease;

        }
      </style>
    ";
    echo '<pre id="log-' . $randid . '">';
    print_r($data);
    echo '</pre>';
  }