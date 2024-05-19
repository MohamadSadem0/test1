package com.example.Alert.Guard.entity;
import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Table(name = "safe_zone")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class SafeZone {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long safeZoneId;
    private String name;
    private String location;
}