/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package reortados;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.IOException;

/**
 *
 * @author Administrador
 */

public class Reortados {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        File archivo;

        FileReader fr;

        try {
    archivo = new File("F:\\reportados.txt");

            fr = new FileReader(archivo);

            BufferedReader br = new BufferedReader(fr);

            String linea;
            String delimiter = ",";
            String correo = "";
            String nombre="";
            String matriz[][]=new String[3][2];
            int i = 0;
            while ((linea = br.readLine()) != null) {

            String[] a = linea.split(delimiter);

                matriz[i][0] = a[0];

                matriz[i][1] = a[1];
                i++;   
                correo=a[0];
                nombre=a[1];   
            }
           
         final String xmlStr = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>\n"+
                                "<CORREO>"+correo+"</CORREO><nombre>"+nombre+"</nombre>";       

          

           

        } catch (IOException e) {

     

        }

    }

    }
    

