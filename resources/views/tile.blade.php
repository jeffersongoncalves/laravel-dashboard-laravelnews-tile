<x-dashboard-tile :position="$position" :refresh-interval="$refreshIntervalInSeconds">
    <div class="font-bold text-center">{!! $articleTitle !!}</div>
    <div class="text-sm font-bold text-center" id="article-content">{!! $articleContent !!}</div>

    <img src="{!! $articleQrCode !!}" alt="QR Code" id="qrcode" />
    <style>
        #article-content img{
            padding:20px;
        }
        #article-content p{
            display: none;
        }
        #article-content p:first-child{
            display: block;
        }
        #article-content hr{
            display: none;
        }
        #qrcode{
            position: absolute;
            background-color: white;
            bottom: 5px;
            left: 5px;
            width: 15%;
            padding:0px;
        }
    </style>
</x-dashboard-tile>
