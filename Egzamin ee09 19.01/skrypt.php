<? php
      $ conn = mysqli_connect ( "localhost" , "root" , "" , "dane" )
      or die ( "Brak połączenia z danymi z danych" );

      if ( isset ( $ _POST [ 'submit' ])) {
        $ tytuł = $ _POST [ 'tytuł' ];
        $ type = $ _POST [ 'type' ];
        $ rok = $ _POST [ 'rok' ];
        stawka $ = _POST $ [ 'stopa' ];

        $ zapytanie = "INSERT INTO filmy (gatunki_id, tytul, rok, ocena) VALUES ($ type, '" . $ title . "', $ year, $ rate)" ;
        $ wynik = mysqli_query ( $ conn , $ sklep ) or die ( "Nie udało sie dodać do bazy danych." );
        echo  „Film:” . $ tytuł . "został dodany do bazy." ;
      }

      mysqli_close ( $ conn );
?>
