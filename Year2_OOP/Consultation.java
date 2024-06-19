
package Coursework;

import java.util.*;

public class Consultation {
    private int year;
    private int month;
    private int day;
    private String time;
    
    public Consultation(int day, int month, int year, String time){
        if ((year > 1940) && (year<2099) && (month > 0) && (month < 13) && (day > 0) && (day < 32) && (time.length() > 0) && (time.length() < 6)) {
            this.day = day;
            this.month = month;
            this.year = year;
            this.time = time;
        }
        else{
            System.out.println("Please try again.");
        }
    }
    
    public void setYear(int year){
        if ((year > 1940) && (year < 2099)){
            this.year = year;
        }else{
            System.out.println("Please type in a correct date.");
        }
    }
    
    public void setMonth(int month){
        if ((month > 0) && (month < 13)){
            this.month = month;
        }else{
            System.out.println("Please type in a correct date");
        }
    }
    
    public void setDay(int day){
        if ((day > 0) && (day < 32)){
            this.day = day;    
        }else{
            System.out.println("Please type in a correct date");
        }
    }
    
    public void setTime(String time){
        if ((time.length() >0) && (time.length() <5)){
            this.time = time;
        }else{
            System.out.println("Please type in a correct time");
        }
    }
    
    public int getYear(){
        return year;
    }
    
    public int getMonth(){
        return month;
    }
    
    public int getDay(){
        return day;
    }
    
    public String getTime(){
        return time;
    }
    
    public String getDate(){
        String dateStr = String.format("%02d/%02d/%04d", day, month, year);
        return dateStr;
    }
    
    }
