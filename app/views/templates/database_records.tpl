<ol>
    {foreach $data as $item} 
        {strip}
            <li><b>idwynik</b>: {$item['idwynik']} ||| <b>kwota</b>: {$item['kwota']}zł ||| <b>liczba lat</b>: {$item['liczba_lat']} ||| <b>procent</b>: {$item['procent']}% ||| <b>rata</b>: {$item['rata']} zł ||| <b>data</b>: {$item['data']}</li>
            {/strip}
        {/foreach}
</ol>