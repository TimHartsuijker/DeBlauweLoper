
<!DOCTYPE html>

    <body>
        <div class= "container mt-5"> 
            <div class= "row"> 
                <div class= "col-md-12"> 
                    <div class= "card"> 
                        <div class= "card-header"> 
                            <h4> Lid toevoegen
                                <a href="overzicht.php" class="btn btn-danger float-end">Terug</a>
                            <h4>
                            </div> 
                            <div class= "card-body"> 

                                <form action= "code.php" method="POST">

                                    <div class= "mb-3"> 
                                        <label>Naam</label>
                                        <input type="text" name="naam" class="form-control"> 
                                    </div>
                                    
                                    <div class= "mb-3"> 
                                        <label>E-mail</label>
                                        <input type="text" name="e-mail" class="form-control"> 
                                    </div>

                                    <div class= "mb-3"> 
                                        <label>Telefoonnummer</label>
                                        <input type="text" name="telefoonnummer" class="form-control"> 
                                    </div>

                                    <div class= "mb-3"> 
                                        <label>Geboortedatum</label>
                                        <input type="text" name="geboortedatum" class="form-control"> 
                                    </div>

                                    <div class= "mb-3"> 
                                        <label>Wachtwoord</label>
                                        <input type="text" name="wachtwoord" class="form-control"> 
                                    </div>

                                    <div class= "mb-3"> 
                                        <label>Lidtype</label>
                                        <input type="text" name="lidtype" class="form-control"> 
                                    </div>

                                    <div class="mb-3">  
                                        <button type="submit" name="opslaan_lid" class="btn btn-primary">Lid opslaan</button>
                                    </div>

</form> 
                         </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>



